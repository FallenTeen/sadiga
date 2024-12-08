<?php

namespace App\Livewire\Barang;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Barang;
use App\Models\Kategori;

class Barangindex extends Component
{
    use WithFileUploads, WithPagination;

    public $search = '';
    public $filterKategori = '';
    public $barangId;
    public $nama_barang, $harga, $diskon, $harga_akhir, $stok, $kategori_id, $deskripsi, $gambar, $gambar_desk = [];
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingFilterKategori()
    {
        $this->resetPage();
    }

    public function addBarang()
    {
        return redirect()->route('productmanage.create');
    }

    public function editBarang($barangId)
    {
        return redirect()->route('productmanage.edit', $barangId);
    }

    public function delete($id)
    {
        $barang = Barang::findOrFail($id);

        if ($barang->gambar && file_exists(storage_path('app/public/' . $barang->gambar))) {
            unlink(storage_path('app/public/' . $barang->gambar));
        }

        if ($barang->gambar_desk) {
            $gambarDeskPaths = json_decode($barang->gambar_desk, true);
            foreach ($gambarDeskPaths as $path) {
                if (file_exists(storage_path('app/public/' . $path))) {
                    unlink(storage_path('app/public/' . $path));
                }
            }
        }

        $barang->delete();

        session()->flash('message', 'Barang berhasil dihapus!');
        $this->resetPage();
    }

    public function render()
    {
        $query = Barang::query();

        if ($this->search) {
            $query->where('nama_barang', 'like', '%' . $this->search . '%');
        }

        if ($this->filterKategori) {
            $query->where('kategori_id', $this->filterKategori);
        }

        return view('livewire.barang.barangindex', [
            'barangList' => $query->with('kategori')->paginate(10),
            'kategoriList' => Kategori::all(),
        ])->layout('layouts.app');
    }
}
