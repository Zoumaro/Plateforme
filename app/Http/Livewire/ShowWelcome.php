<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowWelcome extends Component
{
    public $currentUrl = '/';
    
    public function setActiveUrl($url)
    {
        $this->currentUrl = $url;
    }

    public function render()
    {
        return view('livewire.show-welcome');
    }
}
