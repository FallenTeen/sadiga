<?php

namespace App\Livewire\Component;
use App\Models\Barang;

use Livewire\Component;

class BarangDisplaySearch extends Component
{
    public $search;

    public function render()
    {
        $barangs = Barang::query()->where('nama_barang', 'like' , '%' .  $this->search . '%')->get();
        return view('livewire.component.barang-display-search', compact('barangs'));
    }
}
