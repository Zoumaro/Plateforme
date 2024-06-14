<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product; 

class ProductsList extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::where('user_id', auth()->user()->id)->get();
    }
    

    public function render()
    {
        return view('livewire.products-list');
    }
}
