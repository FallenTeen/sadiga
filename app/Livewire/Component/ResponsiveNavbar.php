<?php

namespace App\Livewire\Component;

use Livewire\Component;

class ResponsiveNavbar extends Component
{
    public $searchTerm = '';
    public function search()
    {
        return redirect()->route('produk', ['search' => $this->searchTerm]);
    }
    public function render()
    {
        return view('livewire.component.responsive-navbar');
    }
}
