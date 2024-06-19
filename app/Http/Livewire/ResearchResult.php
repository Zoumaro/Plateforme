<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ResearchResult extends Component
{
    public $producers = [];

    public function mount($query) {
        $this->producers = User::where('address', 'like', '%'.$query.'%')
        ->orWhereHas('department', function($queryDapart) use($query) {
            $queryDapart->where('name', 'like', '%'.$query.'%');
        })
        ->orWhereHas('municipality', function($queryDapart) use($query) {
            $queryDapart->where('name', 'like', '%'.$query.'%');
        })
        ->orWhereHas('district', function($queryDapart) use($query) {
            $queryDapart->where('name', 'like', '%'.$query.'%');
        })
        ->orWhereHas('locality', function($queryDapart) use($query) {
            $queryDapart->where('name', 'like', '%'.$query.'%');
        })
        ->get();
    }

    public function render()
    {
        return view('livewire.research-result');
    }
}
