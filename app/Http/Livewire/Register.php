<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    public $userType;
    public $firstName;
    public $lastName;
    public $telephone;
    public $address;
    public $email;
    public $password;

    protected $rules = [
        'userType' => 'required|string',
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'telephone' => 'required|string|max:20',
        'address' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
    ];

    public function register()
    {
        $this->validate();

        switch ($this->userType) {
            case 'producteur':
                Producteur::create([
                    'first_name' => $this->firstName,
                    'last_name' => $this->lastName,
                    'telephone' => $this->telephone,
                    'address' => $this->address,
                    'email' => $this->email,
                    'password' => Hash::make($this->password),
                ]);
                break;

            case 'client':
                Client::create([
                    'first_name' => $this->firstName,
                    'last_name' => $this->lastName,
                    'telephone' => $this->telephone,
                    'address' => $this->address,
                    'email' => $this->email,
                    'password' => Hash::make($this->password),
                ]);
                break;

            case 'agro -entreprise':
                AgroEntreprise::create([
                    'name' => $this->firstName,
                    'telephone' => $this->telephone,
                    'address' => $this->address,
                    'email' => $this->email,
                    'password' => Hash::make($this->password),
                ]);
                break;
        }

        return redirect('/')->route('confirmation');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
