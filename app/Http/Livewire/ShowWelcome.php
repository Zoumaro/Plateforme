<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ShowWelcome extends Component
{
    public $currentUrl = '/';
    
    public function setActiveUrl($url)
    {
        $this->currentUrl = $url;
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.show-welcome');
    }
}
