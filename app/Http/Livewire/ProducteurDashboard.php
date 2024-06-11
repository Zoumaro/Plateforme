<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;



class ProducteurDashboard extends Component
{
    public Product $newProduit;

    public function rules()
    {
        return [
        'newProduit.name'=> 'required|min:3', 
        'newProduit.unit_price' => 'required', 
        'newProduit.picture' => 'nullable', 
        'newProduit.address'=> 'required', 
        'newProduit.stock'=> 'required', 
        'newProduit.user_id'=> 'required', 
        'newProduit.unit_id'=> 'required',
        'newProduit.type_product_id'=> 'required'
        ];
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function create()
    {
        $this->newProduit = new Product();
    }

    public function save()
    {
        dd($this->newProduit);
    }
    public function render()
    {
        return view('livewire.producteur-dashboard');
    }
}
