<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Barang;

class BarangIndex extends Component
{
    public function render()
    {
        $barangs = Barang::all();
        return view('livewire.barang-index');
    }
}
