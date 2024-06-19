<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product; 
use Illuminate\Support\Facades\Auth;

class ProductsList extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::where('user_id', auth()->user()->id)->get();
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.products-list');
    }
}
