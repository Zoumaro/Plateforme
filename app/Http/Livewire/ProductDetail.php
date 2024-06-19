<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductDetail extends Component
{
    public $productId;
    public $product;

    public function mount($productId)
    {
        $this->productId = $productId;
        $this->product = Product::with(['user', 'unit', 'productType'])->findOrFail($productId);

    }
    public function render()
    {
        return view('livewire.product-detail', ['product' => $this->product]);
    }
}

