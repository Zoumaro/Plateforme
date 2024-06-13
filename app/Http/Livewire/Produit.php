<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Produit extends Component
{
    public function render()
    {
        return view('livewire.produit',["products"=>Product::all()]);
    }
}
