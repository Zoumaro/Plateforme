<?php
namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Company as CompanyModel;

class Company extends Component
{
    public $companyName;
    public $contact;
    public $description;

    protected $rules = [
        'companyName' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
    ];

    public function store()
    {
        $this->validate();

        $company = new CompanyModel();
        $company->companyName = $this->companyName; 
        $company->contact = $this->contact;
        $company->description = $this->description;
        $company->user_id = Auth::id();
        
        $company->save();

        session()->flash('message', 'Entreprise créée avec succès !');
        return redirect()->route('agro-entreprise-dashboard');
    }

    public function render()
    {
        return view('livewire.company');
    }
}