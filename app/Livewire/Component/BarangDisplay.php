<?php

namespace App\Livewire\Component;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Barang;

class BarangDisplay extends Component
{
    use WithPagination;

    public $jumlahPerHalama, $kategori, $class;

    public function mount($jumlahPerHalaman = 2, $kategori = null)
    {
        $this->jumlahPerHalaman = $jumlahPerHalaman;
        $this->kategori = $kategori;
    }

    public function render()
    {
        $barangs = $this->kategori
            ? Barang::whereHas('kategori', function ($query) {
                $query->where('nama_kategori', $this->kategori);
            })->paginate($this->jumlahPerHalaman)
            : Barang::paginate($this->jumlahPerHalaman);

        return view('livewire.component.barang-display', [
            'barangs' => $barangs,
        ]);
    }
}
