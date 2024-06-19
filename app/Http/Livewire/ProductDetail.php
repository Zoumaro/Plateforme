<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

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

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
    public function render()
    {
        return view('livewire.product-detail');
    }
}

