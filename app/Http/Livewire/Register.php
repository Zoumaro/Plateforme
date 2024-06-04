<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Role;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name;
    public $first_name;
    public $email;
    public $telephone;
    public $password;
    public $password_confirmation;
    public $role_id; 
    public $roles; 

    protected $rules = [
        'name' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'telephone' => 'required|string|max:20',
        'password' => 'required|string|min:8|confirmed',
        'password_confirmation' => 'required|string|min:8',
        'role_id' => 'required|exists:roles,id', 
    ];

    public function mount()
    {
        $this->roles = Role::all();
    }

    public function submit()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'first_name' => $this->first_name,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'password' => Hash::make($this->password),
            'role_id' => $this->role_id,
        ]);

        return redirect()->route('login')->with('success', 'Inscription réussie.');
    }

    public function render()
    {
        return view('livewire.register', [
            'roles' => $this->roles,
        ]);
    }
}
