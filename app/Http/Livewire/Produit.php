<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\ProductType;

class Produit extends Component
{
    public $productTypes;

    public function mount()
    {
        $this->productTypes = ProductType::all();
    }

    
    public function render()
    {
        return view('livewire.produit',["products"=>Product::all()]);
    }
}
