<?php

namespace App\Livewire\Backoffice;

use Livewire\Component;
use App\Models\Barang;
use App\Models\User;
use App\Models\jasa;
use App\Models\Kategori;
use App\Models\Feedback;
use App\Models\Pekerja;
use Livewire\Volt\Compilers\Mount;

class Dashboard extends Component
{
    public $jmlUserBaru, $jmlKategori, $jmlBarangPerKategori, $itemPalingBanyakDisukai, $jmlItemBaruPerInterval, $grafikAnalisaItemDisukai;
    public function mount()
    {
        $this->jmlUserBaru = User::where('created_at', '>=', now()->subMonth())->count();
        $this->jmlKategori = Kategori::count();
        $this->jmlBarangPerKategori = Kategori::withCount('barangs')->get();
        $this->jmlItemBaruPerInterval = Barang::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count')
            ->where('created_at', '>=', now()->subMonth()) // Sesuaikan rentang waktu sesuai kebutuhan
            ->groupByRaw('YEAR(created_at), MONTH(created_at)')
            ->get()
            ->map(function ($item) {
                $item->month_name = \Carbon\Carbon::createFromFormat('Y-m', "{$item->year}-{$item->month}")->format('F');
                return $item;
            });

        $this->itemPalingBanyakDisukai = Barang::withCount('likedByUsers')
            ->orderByDesc('liked_by_users_count')
            ->take(3)
            ->get();
        $this->grafikAnalisaItemDisukai = Barang::selectRaw('DATE(tb_barang.created_at) as date, kategori_id, COUNT(*) as count')
            ->join('tb_kategori', 'tb_kategori.id', '=', 'tb_barang.kategori_id')
            ->groupBy('date', 'kategori_id')
            ->get();


    }
    public function render()
    {
        return view('livewire.backoffice.dashboard')->layout('layouts.custom');
    }
}
