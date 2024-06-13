<?php

namespace App\Http\Livewire;

use App\Models\Unit;
use App\Models\Product;
use Livewire\Component;
use App\Models\ProductType;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ProducteurDashboard extends Component
{
    use WithFileUploads;

    public $userName;
    public $userEmail;
    public $newProduit;
    public $picture;
    public $units;
    public $productTypes;

    protected $rules = [
        'newProduit.name' => 'required|min:3',
        'newProduit.unit_price' => 'required|numeric|min:0',
        'newProduit.description' => 'nullable|string',
        'picture' => 'nullable|image|max:1024',
        'newProduit.address' => 'required',
        'newProduit.stock' => 'required|integer',
        'newProduit.unit_id' => 'required|exists:units,id',
        'newProduit.product_type_id' => 'required|exists:product_types,id',
    ];

    public function mount()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $this->userName = $user->name;
            $this->userEmail = $user->email;
        } else {
            $this->userName = null;
            $this->userEmail = null;
        }

        $this->newProduit = new Product();
        $this->units = Unit::all();
        $this->productTypes = ProductType::all();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function create()
    {
        $this->newProduit = new Product();
        $this->picture = null;
    }

    public function save()
    {
        $this->validate();

        if ($this->picture) {
            $this->newProduit->picture = $this->picture->store('pictures', 'public');
        }

        
        $this->newProduit->user_id = Auth::id();
        $this->newProduit->save();

        $this->newProduit = new Product();
        $this->picture = null;

       
        session()->flash('message', 'Produit ajouté avec succès.');

        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.producteur-dashboard', [
            'units' => $this->units,
            'productTypes' => $this->productTypes,
        ]);
    }
}
