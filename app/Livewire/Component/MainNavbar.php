<?php

namespace App\Livewire\Component;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MainNavbar extends Component
{
    public function render()
    {
        return view('livewire.component.main-navbar');
    }
}
