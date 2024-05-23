<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;




class Register extends Component
{

    public $nom;
    public $prenoms;
    public $email;
    public $telephone;
    public $motDePasse;
    public $confirmMotDePasse;
    public $user_type;

    protected $rules = [
        'nom' => 'required|string|max:255',
        'prenoms' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'telephone' => 'required|string|max:20',
        'motDePasse' => 'required|string|min:8|same:confirmMotDePasse',
        'confirmMotDePasse' => 'required|string|min:8',
        'user_type' => 'required|in:producteur,client,agroEntreprise',
    ];

    protected $messages = [
        'nom.required' => 'Le nom est requis.',
        'prenoms.required' => 'Les prénoms sont requis.',
        'email.required' => 'L\'email est requis.',
        'email.unique' => 'Cet email est déjà utilisé.',
        'telephone.required' => 'Le numéro de téléphone est requis.',
        'motDePasse.required' => 'Le mot de passe est requis.',
        'motDePasse.same' => 'Les mots de passe ne correspondent pas.',
        'confirmMotDePasse.required' => 'La confirmation du mot de passe est requise.',
        'user_type.required' => 'Le type d\'utilisateur est requis.',
    ];

    public function submit()
    {
        $this->validate();

        User::create([
            'nom' => $this->nom,
            'prenoms' => $this->prenoms,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'password' => Hash::make($this->motDePasse),
            'user_type' => $this->user_type,
        ]);

        session()->flash('message', 'Inscription réussie !');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
