<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AuthLinks extends Component{
    public $isLoggedIn;
    public $userName;

    public function mount()
    {
        $this->isLoggedIn = Auth::check();
        $this->userName = $this->isLoggedIn ? Auth::user()->name : null;
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth-links');
    }
}

