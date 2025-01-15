<?php

namespace App\Livewire\Service;

use Livewire\Component;
use App\Models\jasa;
use App\Models\Pekerja;
use App\Models\Kategori;
use Livewire\WithPagination;
use illuminate\Http\Request;

class ServiceIndex extends Component
{
    use WithPagination;
    public $kategori_id, $nama_kategori, $deskripsi_kategori; //tb_kategori. deskripsi_kategori di database adalah deskripsi
    public $jasa_id, $nama_jasa, $deskripsi_jasa, $tarif, $pekerja_id, $status_jasa, $snk; //tb_jasa. status_jasa di database adalah status, deskripsi_jasa di database deskripsi
    public $nama_pekerja, $email, $telepon, $alamat, $status_pekerja; //tb_pekerja. status_pekerja di database adalah status

    public $kategoris, $jasas, $pekerjas, $deskripsi, $status;
    public $currentTab = 'pekerja';

    public $showKategoriModal = false, $showJasaModal = false, $showPekerjaModal = false;
    public $showEditKategoriModal = false, $showEditJasaModal = false, $showEditPekerjaModal = false;


    // KATEGORIIIIII

    public function showAddKategoriModal()
    {
        $this->resetInputFields();
        $this->showKategoriModal = true;
    }
    public function storeKategori()
    {
        $this->validate([
            'nama_kategori' => 'required',
            'deskripsi' => 'nullable',
        ]);

        Kategori::create([
            'nama_kategori' => $this->nama_kategori,
            'deskripsi' => $this->deskripsi,
        ]);

        $this->resetInputFields();
        $this->showKategoriModal = false;
        $this->kategoris = Kategori::all();
        session()->flash('message', 'Kategori berhasil ditambahkan.');
        sweetalert()->success('Kategori berhasil ditambahkan');
    }
    public function editKategori($id)
    {
        $kategori = Kategori::findOrFail($id);
        $this->kategori_id = $kategori->id;
        $this->nama_kategori = $kategori->nama_kategori;
        $this->deskripsi = $kategori->deskripsi;

        $this->showEditKategoriModal = true;
    }
    public function updateKategori()
    {
        $this->validate([
            'nama_kategori' => 'required',
            'deskripsi' => 'nullable',
        ]);

        $kategori = Kategori::findOrFail($this->kategori_id);
        $kategori->update([
            'nama_kategori' => $this->nama_kategori,
            'deskripsi' => $this->deskripsi,
        ]);

        $this->resetInputFields();
        $this->showEditKategoriModal = false;
        $this->kategoris = Kategori::all();
        session()->flash('message', 'Kategori berhasil diupdate.');
        sweetalert()->success('Kategori berhasil diupdate');
    }

    public function deleteKategori($id)
    {
        $kategori = Kategori::find($id);
        if ($kategori) {
            $kategori->delete();
            sweetalert()->success('Kategori berhasil dihapus');
            $this->kategoris = Kategori::all();
        }
        sweetalert()->warning('Terjadi kesalahan');
    }


    // Jasa

    public function showAddJasaModal()
    {
        $this->resetInputFields();
        $this->showJasaModal = true;
    }
    public function storeJasa()
    {
        $this->validate([
            'nama_jasa' => 'required',
            'deskripsi' => 'nullable',
        ]);

        Jasa::create([
            'nama_jasa' => $this->nama_jasa,
            'kategori_id' => 1,
            'deskripsi' => $this->deskripsi,
            'tarif' => $this->tarif,
            'pekerja_id' => $this->pekerja_id,
            'status' => 'TERSEDIA',
            'snk' => $this->snk,
        ]);

        $this->resetInputFields();
        $this->showJasaModal = false;
        $this->jasas = Jasa::all();
        session()->flash('message', 'Jasa berhasil ditambahkan.');
        sweetalert()->success('Jasa berhasil ditambahkan');
    }
    public function editJasa($id)
    {
        $jasa = Jasa::findOrFail($id);
        $this->jasa_id = $jasa->id;
        $this->nama_jasa = $jasa->nama_jasa;
        $this->tarif = $jasa->tarif;
        $this->snk = $jasa->snk;
        $this->deskripsi = $jasa->deskripsi;

        $this->showEditJasaModal = true;
    }
    public function updateJasa()
    {
        $this->validate([
            'nama_jasa' => 'required',
            'deskripsi' => 'nullable',
        ]);

        $jasa = Jasa::findOrFail($this->jasa_id);
        $jasa->update([
            'nama_jasa' => $this->nama_jasa,
            'deskripsi' => $this->deskripsi,
            'tarif' => $this->tarif,
            'snk' => $this->snk,
        ]);

        $this->resetInputFields();
        $this->showEditJasaModal = false;
        $this->jasas = Jasa::all();
        session()->flash('message', 'jasa berhasil diupdate.');
        sweetalert()->success('Jasa berhasil diupdate');
    }

    public function deleteJasa($id)
    {
        $jasa = Jasa::find($id);
        if ($jasa) {
            $jasa->delete();
            sweetalert()->success('Jasa berhasil dihapus');
            $this->jasas = Jasa::all();
        }
        sweetalert()->warning('Terjadi kesalahan');
    }


    // Pekerja

    public function showAddPekerjaModal()
    {
        $this->resetInputFields();
        $this->showPekerjaModal = true;
    }

    public function storePekerja()
    {
        $this->validate([
            'nama_pekerja' => 'required|string|max:255',
            'email' => 'required|email|unique:tb_pekerja,email',
            'telepon' => 'required|string|max:20',
            'alamat' => 'required|string',
            'status' => 'required|in:TERSEDIA,ONGOING',
        ]);

        Pekerja::create([
            'nama_pekerja' => $this->nama_pekerja,
            'email' => $this->email,
            'telepon' => $this->telepon,
            'alamat' => $this->alamat,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Pekerja berhasil ditambahkan.');
        sweetalert()->success('Pekerja berhasil ditambahkan');
        $this->resetInputFields();
        $this->showPekerjaModal = false;
        $this->pekerjas = Pekerja::all();
    }
    public function editPekerja($id)
    {
        $pekerja = Pekerja::findOrFail($id);
        $this->pekerja_id = $pekerja->id;
        $this->nama_pekerja = $pekerja->nama_pekerja;
        $this->email = $pekerja->email;
        $this->telepon = $pekerja->telepon;
        $this->alamat = $pekerja->alamat;
        $this->status = $pekerja->status;

        $this->showEditPekerjaModal = true;
    }

    public function updatePekerja()
    {
        $this->validate([
            'nama_pekerja' => 'required|string|max:255',
            'email' => 'required|email|unique:tb_pekerja,email,' . $this->pekerja_id,
            'telepon' => 'required|string|max:20',
            'alamat' => 'required|string',
            'status' => 'required|in:TERSEDIA,ONGOING',
        ]);

        $pekerja = Pekerja::findOrFail($this->pekerja_id);
        $pekerja->update([
            'nama_pekerja' => $this->nama_pekerja,
            'email' => $this->email,
            'telepon' => $this->telepon,
            'alamat' => $this->alamat,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Pekerja berhasil diupdate.');
        sweetalert()->success('Data pekerja berhasil diupdate');
        $this->resetInputFields();
        $this->showEditPekerjaModal = false;
        $this->pekerjas = Pekerja::all();
    }

    public function updateStatusPekerja($pekerja_id)
    {
        $newStatus = $this->status_pekerja[$pekerja_id];

        $pekerja = Pekerja::find($pekerja_id);
        if ($pekerja) {
            $pekerja->status = $newStatus;
            $pekerja->save();
            $this->pekerjas = Pekerja::all();

            session()->flash('message', 'Status pekerja updated successfully.');
            sweetalert()->success('Berhasil mengupdate status');
        }
    }


    // Delete pekerja
    public function deletePekerja($id)
    {
        $pekerja = Pekerja::find($id);
        if ($pekerja) {
            $pekerja->delete();
            session()->flash('message', 'Pekerja berhasil dihapus.');
            sweetalert()->success('Pekerja berhasil dihapus');
        }
        $this->pekerjas = Pekerja::all();
    }
    public function resetInputFields()
    {
        $this->nama_pekerja = '';
        $this->email = '';
        $this->telepon = '';
        $this->alamat = '';
        $this->status = 'TERSEDIA';
    }


    public function mount()
    {
        $this->kategoris = Kategori::all();
        $this->jasas = Jasa::all();
        $this->pekerjas = Pekerja::all();
        $this->status_pekerja = Pekerja::pluck('status', 'id')->toArray();
    }

    public function render()
    {
        return view('livewire.service.service-index', )->layout('layouts.custom');
    }
}
