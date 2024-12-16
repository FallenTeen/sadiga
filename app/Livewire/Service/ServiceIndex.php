<?php

namespace App\Livewire\Service;

use Livewire\Component;
use App\Models\jasa;
use App\Models\Pekerja;
use App\Models\Kategori;

class ServiceIndex extends Component
{
    public $kategori_id, $nama_kategori, $deskripsi_kategori; //tb_kategori. deskripsi_kategori di database adalah deskripsi
    public $nama_jasa, $deskripsi_jasa, $tarif, $pekerja_id, $status_jasa, $snk; //tb_jasa. status_jasa di database adalah status, deskripsi_jasa di database deskripsi
    public $nama_pekerja, $email, $telepon, $alamat, $status_pekerja; //tb_pekerja. status_pekerja di database adalah status

    public $kategoris, $jasas, $pekerjas, $deskripsi, $status;
    public $currentTab = 'jasa';
    public function mount()
    {
        $this->kategoris = Kategori::all();
        $this->jasas = Jasa::all();
        $this->pekerjas = Pekerja::all();
    }

    public function deleteKategori($id)
    {
        $kategori = Kategori::find($id);
        if ($kategori) {
            $kategori->delete();
            $this->kategoris = Kategori::all();
        }
    }
    public function deleteJasa($id)
    {
        $jasa = Jasa::find($id);
        if ($jasa) {
            $jasa->delete();
            $this->jasas = Jasa::all();
        }
    }
    public function deletePekerja($id)
    {
        $pekerja = Pekerja::find($id);
        if ($pekerja) {
            $pekerja->delete();
            $this->pekerjas = Pekerja::all();
        }
    }
    public function render()
    {
        return view('livewire.service.service-index')->layout('layouts.custom');
    }
}
