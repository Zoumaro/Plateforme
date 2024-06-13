<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function submit()
    {
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $role = Auth::user()->role_id;

            switch ($role) {
                case 1:
                    return redirect()->intended('/producteur-dashboard');
                case 2:
                    return redirect()->intended('/acheteur-dashboard');
                case 3:
                    return redirect()->intended('/agro-entreprise-dashboard');
                default:
                    return redirect()->intended('/home');
            }
        }

        $this->addError('email', trans('Mot de passe ou Adresse Email incorrecte'));
    }
    public function render()
    {
        return view('livewire.login');
    }

    
}

    
