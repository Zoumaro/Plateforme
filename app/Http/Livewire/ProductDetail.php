<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductDetail extends Component
{
    public $productId;
    public $product;

    protected $listeners = ['transactionCompleted'];

    public function transactionCompleted()
    {


        $url = route('/produit');
        $this->emit('redirectAfterTransaction', $url);
    }

    public function mount($productId)
    {
        $this->productId = $productId;
        $this->product = Product::with(['user', 'unit', 'productType'])->findOrFail($productId);
       
    }
    public function render()
    {
        return view('livewire.product-detail');
    }
}

