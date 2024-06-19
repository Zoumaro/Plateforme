<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class UserProfile extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.user-profile');
    }
}

