<?php

namespace App\Livewire\Component;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Barang;
use App\Models\jasa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class BarangDisplay extends Component
{
    use WithPagination;

    public $jumlahPerHalaman, $kategori = [], $class, $rekomendasi;
    public $likedBarangs = [];
    public function mount($jumlahPerHalaman = 2, $kategori = [], $rekomendasi = false)
    {
        $this->jumlahPerHalaman = $jumlahPerHalaman;
        $this->kategori = is_array($kategori) ? $kategori : explode(',', $kategori);

        if (Auth::check()) {
            $this->syncLikesWithDatabase();
        } else {
            $this->likedBarangs = Session::get('liked_barangs', []);
        }

        $this->rekomendasi = $rekomendasi;
    }

    public function like($barangId)
    {
        if (Auth::check()) {
            $user = Auth::user();

            $this->syncLikesWithDatabase();

            if ($user->likedBarangs()->where('barang_id', $barangId)->exists()) {
                $user->likedBarangs()->detach($barangId);
            } else {
                $user->likedBarangs()->attach($barangId);
            }
        } else {
            $liked = Session::get('liked_barangs', []);
            if (in_array($barangId, $liked)) {
                $liked = array_diff($liked, [$barangId]);
            } else {
                $liked[] = $barangId;
            }

            Session::put('liked_barangs', $liked);
        }
        $this->dispatch('likeUpdated');
    }

    public function unlike($barangId)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->likedBarangs()->where('barang_id', $barangId)->exists()) {
                $user->likedBarangs()->detach($barangId);
            }
        } else {
            $liked = Session::get('liked_barangs', []);
            if (in_array($barangId, $liked)) {
                $liked = array_diff($liked, [$barangId]);
            }
            Session::put('liked_barangs', $liked);
        }
        $this->dispatch('likeUpdated');
    }

    private function syncLikesWithDatabase()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $sessionLikes = Session::get('liked_barangs', []);
            $allLikedItems = array_merge($sessionLikes, $user->likedBarangs()->pluck('barang_id')->toArray());
            $allLikedItems = array_unique($allLikedItems);
            foreach ($allLikedItems as $barangId) {
                if (!$user->likedBarangs()->where('barang_id', $barangId)->exists()) {
                    $user->likedBarangs()->attach($barangId);
                }
            }
            Session::forget('liked_barangs');
        }
    }

    public function render()
    {
        $likedItems = Auth::check()
            ? Auth::user()->likedBarangs
            : Barang::whereIn('id', Session::get('liked_barangs', []))->get();

        $query = Barang::query();

        if (!empty($this->kategori)) {
            $query->whereHas('kategori', function ($query) {
                $query->whereIn('nama_kategori', $this->kategori);
            });
        }

        if ($this->rekomendasi) {
            $query->where('rekomendasi', true);

            $todaySeed = Carbon::today()->format('Y-m-d');
            $query->orderByRaw('RAND(UNIX_TIMESTAMP(?))', [$todaySeed]);
        }

        $barangs = $query->paginate($this->jumlahPerHalaman);

        return view('livewire.component.barang-display', [
            'barangs' => $barangs,
            'likedItems' => $likedItems,
        ]);
    }
}
