<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class SearchProducers extends Component
{
    public $query;
    public $producers = [];

    public function search()
    {
        if (!empty($this->query)) {

            return redirect()->route('reseach.result', ['query' => $this->query]);
        }
    }

    public function mount() {
        $this->query = '';
    }

    public function render()
    {
        return view('livewire.search-producers');
    }
}
