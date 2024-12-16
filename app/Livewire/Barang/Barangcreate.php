<?php

namespace App\Livewire\Barang;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class Barangcreate extends Component
{
    use WithFileUploads;
    public $currentStep = 1;
    public $merk, $nama_barang, $gambar, $kategori_id;
    public $harga_beli, $harga, $stok, $deskripsi, $gambar_desk = [];
    public $maxGambarDesk = 10;
    public $harga_akhir, $margin, $diskon;

    public function updated($propertyName)
    {
        if (in_array($propertyName, ['harga', 'diskon', 'harga_beli'])) {
            $this->updateHargaAkhir();
            $this->updateMargin();
        }
    }
    public function updatedGambar()
    {
        $this->validate([
            'gambar' => 'image|max:2048',
        ]);
    }


    public function updateHargaAkhir()
    {
        if ($this->harga && $this->diskon !== null) {
            $this->harga_akhir = round($this->harga - ($this->harga * $this->diskon / 100), 0);
        } else {
            $this->harga_akhir = $this->harga;
        }
    }

    public function updateMargin()
    {
        if ($this->harga_akhir && $this->harga_beli) {
            $this->margin = round($this->harga_akhir - $this->harga_beli, 0);
        } else {
            $this->margin = 0;
        }
    }

    public function validateStep()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'merk' => 'required|string|max:255',
                'nama_barang' => 'required|string|max:255',
                'kategori_id' => 'required|exists:tb_kategori,id',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'harga_beli' => 'required|numeric',
                'harga' => 'required|numeric',
                'stok' => 'required|numeric',
                'deskripsi' => 'required|string|max:1000',
                'gambar_desk.*' => 'nullable|image|max:2048',
            ]);
        }
    }

    public function nextStep()
    {
        $this->validateStep();
        if ($this->currentStep < 3) {
            $this->currentStep++;
        }
    }

    public function previousStep()
    {
        $this->currentStep--;
    }
    public function removeTemporaryImage($index)
    {
        unset($this->gambar_desk[$index]);
        $this->gambar_desk = array_values($this->gambar_desk);
    }
    public function save()
    {
        $this->validate([
            'merk' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'kategori_id' => 'required|exists:tb_kategori,id',
            'harga_beli' => 'required|numeric',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|max:1024',
            'gambar_desk.*' => 'nullable|image|max:1024',
        ]);

        Barang::create([
            'merk' => $this->merk,
            'nama_barang' => $this->nama_barang,
            'kategori_id' => $this->kategori_id,
            'harga_beli' => $this->harga_beli,
            'harga' => $this->harga,
            'stok' => $this->stok,
            'deskripsi' => $this->deskripsi,
            'gambar' => $this->gambar->store('barang', 'public'),
            'gambar_desk' => json_encode($this->uploadImages($this->gambar_desk)),
        ]);

        session()->flash('message', 'Barang successfully created!');
        return redirect('/productmanage');
    }

    private function uploadImages($images)
    {
        $paths = [];
        foreach ($images as $image) {
            $paths[] = $image->store('barang-images/desk', 'public');
        }
        return $paths;
    }

    public function render()
    {
        $kategoris = Kategori::whereIn('id', [2, 3])->get();

        return view('livewire.barang.barangcreate', [
            'kategoris' => $kategoris
        ])->layout('layouts.app');
    }
}
