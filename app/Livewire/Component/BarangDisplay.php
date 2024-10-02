<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\Barang;

class BarangDisplay extends Component
{
    public $barangs;

    public function mount()
    {
        $this->barangs = Barang::all();
    }

    public function render()
    {
        return view('livewire.component.barang-display', [
            'barangs' => $this->barangs, 
        ]);
    }
}
