<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Orders extends Component
{
    
    
    public $orders;

    public function mount()
    {
        
        $this->orders = Order::all();
    }

    public function confirmOrder($orderId)
    {
        $order = Order::find($orderId);
        $order->status = 'Confirmed';
        $order->save();
        session()->flash('message', 'Commande confirmée avec succès.');
    }

    public function shipOrder($orderId)
    {
        $order = Order::find($orderId);
        $order->status = 'Shipped';
        $order->save();
        session()->flash('message', 'Commande expédiée avec succès.');
    }

    public function cancelOrder($orderId)
    {
        $order = Order::find($orderId);
        $order->status = 'Cancelled';
        $order->save();
        session()->flash('message', 'Commande annulée avec succès.');
    }

    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
    public function render()
    {
        return view('livewire.orders');
    }
}
