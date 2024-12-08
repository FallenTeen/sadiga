<?php

namespace App\Livewire\Barang;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Barang;
use App\Models\Kategori;

class Barangedit extends Component
{
    protected $layout = 'layouts.app';
    use WithFileUploads;

    public $barangId;
    public $nama_barang, $harga, $diskon, $harga_akhir, $stok, $kategori_id, $deskripsi, $gambar, $gambar_desk = [];
    public $existingGambar, $existingGambarDesk = [];
    public $maxGambarDesk = 5;

    public function mount($barangId)
    {
        $this->barangId = $barangId;
        $barang = Barang::findOrFail($this->barangId);

        $this->nama_barang = $barang->nama_barang;
        $this->harga = $barang->harga;
        $this->diskon = $barang->diskon;
        $this->harga_akhir = $barang->harga_akhir;
        $this->stok = $barang->stok;
        $this->kategori_id = $barang->kategori_id;
        $this->deskripsi = $barang->deskripsi;
        $this->existingGambar = $barang->gambar;
        $this->existingGambarDesk = json_decode($barang->gambar_desk, true);
    }

    public function save()
    {
        $validatedData = $this->validate([
            'nama_barang' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'diskon' => 'nullable|numeric',
            'harga_akhir' => 'nullable|numeric',
            'stok' => 'required|integer',
            'kategori_id' => 'required|exists:tb_kategori,id',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:1024',
            'gambar_desk' => 'nullable|array',
            'gambar_desk.*' => 'image|max:1024',
        ]);

        if ($this->gambar) {
            if ($this->existingGambar && file_exists(storage_path('app/public/' . $this->existingGambar))) {
                unlink(storage_path('app/public/' . $this->existingGambar));
            }

            $gambarPath = $this->gambar->store('barang-images', 'public');
            $validatedData['gambar'] = $gambarPath;
        } else {
            $validatedData['gambar'] = $this->existingGambar;
        }

        if ($this->gambar_desk) {
            $allGambarDesk = array_merge($this->existingGambarDesk, $this->gambar_desk);
            if (count($allGambarDesk) > $this->maxGambarDesk) {
                $allGambarDesk = array_slice($allGambarDesk, 0, $this->maxGambarDesk);
            }

            $gambarDeskPaths = [];
            foreach ($allGambarDesk as $image) {
                $gambarDeskPaths[] = $image->store('barang-images/deskripsi', 'public');
            }
            $validatedData['gambar_desk'] = json_encode($gambarDeskPaths);
        } else {
            $validatedData['gambar_desk'] = json_encode($this->existingGambarDesk);
        }

        Barang::where('id', $this->barangId)->update($validatedData);

        session()->flash('message', 'Barang berhasil diperbarui!');
        return redirect()->route('productmanage.index');
    }

    public function addGambarDesk()
    {
        if (count($this->gambar_desk) < $this->maxGambarDesk) {
            $this->gambar_desk[] = null;
        }
    }

    public function render()
    {
        $kategoris = Kategori::all();

        return view('livewire.barang.barangedit', [
            'kategoris' => $kategoris,
        ])->layout('layouts.app');
    }
}
