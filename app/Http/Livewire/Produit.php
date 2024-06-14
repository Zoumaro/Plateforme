<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Produit extends Component
{
    public $category = 'TOUT LES PRODUITS';

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getFilteredProductsProperty()
    {
        if ($this->category === 'TOUT LES PRODUITS') {
            return Product::all();
        }

        return Product::whereHas('productType', function($query) {
            $query->where('name', $this->category);
        })->get();
    }
    public function render()
    {
        return view('livewire.produit',["products"=>Product::all(),'products' => $this->filteredProducts,]);
    }
}
