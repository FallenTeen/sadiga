<?php

namespace App\Livewire\Component;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Redirect;

use App\Models\Kategori;
use App\Models\Barang;

class MainNavbar extends Component
{
    public $likedItems = [], $searchTerm = '';

    protected $listeners = ['likeUpdated' => 'updateLikedItems'];

    public function mount()
    {
        if (auth()->check()) {
            $this->likedItems = auth()->user()->likedBarangs()->get(['tb_barang.id', 'tb_barang.nama_barang', 'tb_barang.harga']);
        } else {
            $this->likedItems = collect();
        }
    }

    public function search()
    {
        return redirect()->route('produk', ['search' => $this->searchTerm]);
    }

    public function updateLikedItems()
    {
        if (auth()->check()) {
            $this->likedItems = auth()->user()->likedBarangs()->get(['tb_barang.id', 'tb_barang.nama_barang', 'tb_barang.harga']);
        } else {
            $this->likedItems = collect();
        }
    }


    public function render()
    {
        return view('livewire.component.main-navbar');
    }
}
