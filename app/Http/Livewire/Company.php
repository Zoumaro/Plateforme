<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company as CompanyModel;

class Company extends Component
{
    public $companyName;
    public $contact;
    public $description;

    public function render()
    {
        return view('livewire.company');
    }

    public function store(Request $request)
    {
        $request->validate([
            'companyName' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);

        $company = new CompanyModel();
        $company->name = $request->companyName;
        $company->contact = $request->contact;
        $company->description = $request->description;
        $company->user_id = Auth::id();
        
        $company->save();

        session()->flash('message', 'Entreprise créée avec succès !');
        return redirect()->route('agro-entreprise-dashboard');
    }
}
