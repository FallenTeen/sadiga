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
    public $barangId, $nama_barang, $harga, $diskon, $harga_akhir, $stok, $kategori_id, $rekomendasi, $deskripsi, $gambar, $gambar_desk = [];

    public $sortColumn = 'nama_barang';
    public $sortDirection = 'asc';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedFilterKategori()
    {
        $this->resetPage();
    }

    public function sortBy($column)
    {
        if ($this->sortColumn === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortColumn = $column;
            $this->sortDirection = 'asc';
        }

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
    public function toggleRecommended($barangId)
    {
        $barang = Barang::find($barangId);

        if ($barang) {
            $barang->rekomendasi = !$barang->rekomendasi;
            $barang->save();

            session()->flash('message', 'Status rekomendasi berhasil diperbarui!');
        }
    }

    public function render()
    {
        $query = Barang::query();
        $query->whereIn('kategori_id', [2, 3]);

        if ($this->search) {
            $query->where('nama_barang', 'like', '%' . $this->search . '%');
        }

        if ($this->filterKategori) {
            $query->where('kategori_id', $this->filterKategori);
        }
        $query->orderBy($this->sortColumn, $this->sortDirection);

        return view('livewire.barang.barangindex', [
            'barangList' => $query->with('kategori')->paginate(6),
            'kategoriList' => Kategori::whereIn('id', [2, 3])->get(),
        ])->layout('layouts.custom');
    }
}
