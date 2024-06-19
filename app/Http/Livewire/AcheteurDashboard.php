<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AcheteurDashboard extends Component
{
    public $products;
    public $product_id;
    public $quantity;
    public $deliveryAddress;
    public $showModal = false;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function submit()
    {
        $this->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'deliveryAddress' => 'required|string|max:255',
        ]);

        Order::create([
            'date' => now(),
            'status' => 'Pending',
            'quantity' => $this->quantity,
            'deliveryAddress' => $this->deliveryAddress,
            'user_id' => Auth::id(),
            'product_id' => $this->product_id,
        ]);

        session()->flash('message', 'Commande passée avec succès.');
        $this->resetForm();
        $this->showModal = false;
    }

    public function resetForm()
    {
        $this->product_id = '';
        $this->quantity = '';
        $this->deliveryAddress = '';
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.acheteur-dashboard');
    }
}
