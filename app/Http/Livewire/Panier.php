<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Panier extends Component
{
    public $panier = [];
    public $total = 0;

    protected $listeners = ['AjoutPanier'];

    public function ajoutPanier($productId, $productName, $productPrice)
    {
        $existingProduct = collect($this->panier)->firstWhere('id', $productId);

        if ($existingProduct) {
            $existingProduct['quantity'] += 1;
        } else {
            $this->panier[] = [
                'id' => $productId,
                'name' => $productName,
                'price' => $productPrice,
                'quantity' => 1,
            ];
        }

        $this->updateTotal();
    }

    public function updateTotal()
    {
        $this->total = collect($this->cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });
    }

    public function render()
    {
        return view('livewire.panier');
    }

}
