<?php

namespace App\Livewire\Component;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MainNavbarUser extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.component.main-navbar-user');
    }
}
