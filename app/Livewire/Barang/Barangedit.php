<?php

namespace App\Livewire\Barang;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class Barangedit extends Component
{
    protected $layout = 'layouts.app';
    use WithFileUploads;

    public $barangId;
    public $merk, $nama_barang, $gambar, $stok;
    public $harga, $harga_beli, $margin, $diskon, $harga_akhir;
    public $kategori_id, $deskripsi, $gambar_desk = [];
    public $existingGambar, $existingGambarDesk = [];
    public $maxGambarDesk = 5;

    public function mount($barangId)
    {
        $this->barangId = $barangId;
        $barang = Barang::findOrFail($this->barangId);

        $this->merk = $barang->merk;
        $this->nama_barang = $barang->nama_barang;
        $this->gambar = $barang->gambar;
        $this->existingGambar = $barang->gambar;
        $this->stok = $barang->stok;

        $this->harga_beli = $barang->harga_beli = round($barang->harga_beli, 0);
        $this->margin = $barang->margin = round($barang->margin, 0);
        $this->harga = $barang->harga = round($barang->harga, 0);
        $this->diskon = $barang->diskon;
        $this->harga_akhir = $barang->harga_akhir = round($barang->harga_akhir, 0);

        $this->kategori_id = $barang->kategori_id;
        $this->deskripsi = $barang->deskripsi;
        $this->existingGambarDesk = $barang->gambar_desk ? json_decode($barang->gambar_desk, true) : [];
    }

    //BAGIAN UTAMAAAAAAAAAAAAAAAAAAAAAAAA
    public function saveDetailUtama()
    {
        $validatedData = $this->validate([
            'merk' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'stok' => 'required|numeric',
        ]);

        if ($this->gambar instanceof \Illuminate\Http\UploadedFile) {
            $this->validate([
                'gambar' => 'image|max:2048',
            ]);

            if ($this->existingGambar && file_exists(storage_path('app/public/' . $this->existingGambar))) {
                unlink(storage_path('app/public/' . $this->existingGambar));
            }
            $gambarPath = $this->gambar->store('barang-images', 'public');
            $validatedData['gambar'] = $gambarPath;
        } else {
            $validatedData['gambar'] = $this->existingGambar;
        }

        Barang::where('id', $this->barangId)->update($validatedData);
        session()->flash('message_detail', 'Detail Barang berhasil diubah');
    }


    //BAGIAN HARGAAAAAAAAAAAAAAAAAAAAAAa

    public function updated($propertyName)
    {
    
        if (in_array($propertyName, ['harga', 'diskon', 'harga_beli'])) {
            $this->updateHargaAkhir(); 
            $this->updateMargin();     
        }
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


    public function formatNumber($number)
    {
        return number_format($number, 0, '.', '.');
    }

    public function saveManajemenHarga()
    {
        $validatedData = $this->validate([
            'harga' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'diskon' => 'nullable|numeric',
            'harga_akhir' => 'nullable|numeric',
            'margin' => 'nullable|numeric',
        ]);

        $dataToUpdate = [
            'harga' => $this->harga,
            'harga_beli' => $this->harga_beli,
            'diskon' => $this->diskon,
            'harga_akhir' => $this->harga_akhir,
            'margin' => $this->margin,
        ];

        Barang::where('id', $this->barangId)->update($dataToUpdate);
        session()->flash('message_harga', 'Manajemen harga berhasil diperbarui!');
    }


    //BAGIAN DESKRIPSIIIIII

    protected function saveImagesToDatabase()
    {
        $barang = Barang::findOrFail($this->barangId);
        $barang->gambar_desk = json_encode($this->existingGambarDesk);
        $barang->save();
    }

    public function removeTemporaryImage($index)
    {
        unset($this->gambar_desk[$index]);
        $this->gambar_desk = array_values($this->gambar_desk);
    }


    public function saveDeskripsiDanGambarDesk()
    {
        $validatedData = $this->validate([
            'deskripsi' => 'required|string|max:1000',
            'gambar_desk' => 'nullable|array|max:10',
            'gambar_desk.*' => 'image|max:2048',
        ]);

        if ($this->gambar_desk) {
            foreach ($this->gambar_desk as $image) {
                $path = $image->store('barang-images/deskripsi', 'public');
                $this->existingGambarDesk[] = $path;
            }
        }

        $barang = Barang::findOrFail($this->barangId);
        $barang->deskripsi = $this->deskripsi;
        $barang->gambar_desk = json_encode($this->existingGambarDesk);
        $barang->save();

        $this->gambar_desk = [];
        session()->flash('message_desk', 'Deskripsi dan gambar berhasil disimpan!');
    }

    public function removeExistingImage($path)
    {
        $this->existingGambarDesk = array_filter($this->existingGambarDesk, fn($image) => $image !== $path);

        if (Storage::exists('public/' . $path)) {
            Storage::delete('public/' . $path);
        }

        $barang = Barang::findOrFail($this->barangId);
        $barang->gambar_desk = json_encode($this->existingGambarDesk);
        $barang->save();

        session()->flash('message_del_gambar', 'Gambar berhasil dihapus!');
    }



    public function render()
    {
        $kategoris = Kategori::all();

        return view('livewire.barang.barangedit', [
            'kategoris' => $kategoris,
            'gambar' => $this->gambar,
        ])->layout('layouts.custom');
    }
}
