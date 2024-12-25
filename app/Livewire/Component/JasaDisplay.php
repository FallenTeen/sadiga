<?php

namespace App\Livewire\Component;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Jasa;
use App\Models\Kategori;

class JasaDisplay extends Component
{
    use WithPagination;

    public $jumlahPerHalaman = 2, $kategori = [], $rekomendasi = false, $modalOpen = false, $selectedJasa;

    public function mount($jumlahPerHalaman = 2, $kategori = [], $rekomendasi = false)
    {
        $this->jumlahPerHalaman = $jumlahPerHalaman;
        $this->kategori = is_array($kategori) ? $kategori : explode(',', $kategori);
        $this->rekomendasi = $rekomendasi;
    }

    public function showDetail($id)
    {
        $this->selectedJasa = Jasa::with('kategori')->find($id);
        $this->modalOpen = true;
    }

    public function render()
    {
        $query = Jasa::query();

        if (!empty($this->kategori)) {
            $query->whereHas('kategori', function ($query) {
                $query->whereIn('nama_kategori', $this->kategori);
            });
        }

        // Filter berdasarkan rekomendasi jika diset
        if ($this->rekomendasi) {
            $query->where('rekomendasi', true);
        }

        $jasas = $query->paginate($this->jumlahPerHalaman);

        return view('livewire.component.jasa-display', [
            'jasas' => $jasas,
        ]);
    }
}
