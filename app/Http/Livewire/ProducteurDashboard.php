<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProducteurDashboard extends Component
{

    public $products, $nameProduct, $unitPrice, $picture, $address, $stock, $productId, $id_unit;
    public $isEdit = false;

    public function render()
    {
        $this->products = Product::where('user_id', Auth::id())->get();
        return view('livewire.producteur-dashboard');
    }

    public function resetInputFields()
    {
        $this->nameProduct = '';
        $this->unitPrice = '';
        $this->picture = '';
        $this->address = '';
        $this->stock = '';
        $this->id_unit = '';
        $this->productId = '';
        $this->isEdit = false;
    }

    public function store()
    {
        $validatedData = $this->validate([
            'nameProduct' => 'required',
            'unitPrice' => 'required|numeric',
            'picture' => 'required|string',
            'address' => 'required|string',
            'stock' => 'required|integer',
            'id_unit' => 'required|exists:units,id',
        ]);

        $validatedData['user_id'] = Auth::id();

        Product::create($validatedData);

        session()->flash('message', 'Produit ajouté avec succès.');

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $this->productId = $id;
        $this->nameProduct = $product->nameProduct;
        $this->unitPrice = $product->unitPrice;
        $this->picture = $product->picture;
        $this->address = $product->address;
        $this->stock = $product->stock;
        $this->id_unit = $product->id_unit;
        $this->isEdit = true;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'nameProduct' => 'required',
            'unitPrice' => 'required|numeric',
            'picture' => 'required|string',
            'address' => 'required|string',
            'stock' => 'required|integer',
            'id_unit' => 'required|exists:units,id',
        ]);

        $product = Product::find($this->productId);
        $product->update([
            'nameProduct' => $this->nameProduct,
            'unitPrice' => $this->unitPrice,
            'picture' => $this->picture,
            'address' => $this->address,
            'stock' => $this->stock,
            'id_unit' => $this->id_unit,
        ]);

        session()->flash('message', 'Produit mis à jour avec succès.');

        $this->resetInputFields();
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        session()->flash('message', 'Produit supprimé avec succès.');
    }
}

   

