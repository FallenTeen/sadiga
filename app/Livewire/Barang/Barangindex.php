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
    public $barangId, $nama_barang, $harga, $diskon, $harga_akhir, $stok, $kategori_id, $deskripsi, $gambar, $gambar_desk = [];

    // Variabel untuk sorting
    public $sortColumn = 'nama_barang';  // Default kolom yang disort
    public $sortDirection = 'asc';       // Default arah sorting

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedFilterKategori()
    {
        $this->resetPage();
    }

    // Fungsi untuk menangani sorting
    public function sortBy($column)
    {
        if ($this->sortColumn === $column) {
            // Jika kolom yang sama, toggle arah sorting
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            // Jika kolom berbeda, set kolom baru dan arahkan ke ascending
            $this->sortColumn = $column;
            $this->sortDirection = 'asc';
        }

        $this->resetPage();  // Reset halaman setiap kali sorting berubah
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
        $query->whereIn('kategori_id', [2, 3]);

        // Apply search filter
        if ($this->search) {
            $query->where('nama_barang', 'like', '%' . $this->search . '%');
        }

        // Apply kategori filter
        if ($this->filterKategori) {
            $query->where('kategori_id', $this->filterKategori);
        }

        // Apply sorting
        $query->orderBy($this->sortColumn, $this->sortDirection);

        return view('livewire.barang.barangindex', [
            'barangList' => $query->with('kategori')->paginate(10),
            'kategoriList' => Kategori::whereIn('id', [2, 3])->get(),
        ])->layout('layouts.app');
    }
}
