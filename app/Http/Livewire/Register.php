<?php

namespace App\Http\Livewire;

use App\Models\Department;
use App\Models\District;
use App\Models\Locality;
use App\Models\Municipality;
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
    public $departments;

    public $municipalities = [];

    public $districts = [];

    public $localities = [];

    public $selectedDepartment = null;
    public $selectedMunicipality = null;
    public $selectedDistrict = null;
    public $selectedLocality = null;


    protected $rules = [
        'name' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'telephone' => 'required|string|max:20',
        'password' => 'required|string|min:8|confirmed',
        'password_confirmation' => 'required|string|min:8',
        'role_id' => 'required|exists:roles,id',
        'selectedDepartment' => 'required|exists:departments,id',
        'selectedMunicipality' => 'required|exists:municipalities,id',
        'selectedDistrict' => 'required|exists:districts,id',
        'selectedLocality' => 'required|exists:localities,id',

    ];

    public function mount()
    {
        $this->roles = Role::all();
        $this->departments = Department::all();

    }

    public function updatedSelectedDepartment($departmentId)
    {
        $this->municipalities = Municipality::where('department_id', $departmentId)->get();

        $this->reset(['selectedMunicipality', 'selectedDistrict', 'selectedLocality']);
    }

    public function updatedSelectedMunicipality($municipalityId)
    {
        $this->districts = District::where('municipality_id', $municipalityId)->get();

        $this->reset(['selectedDistrict', 'selectedLocality']);
    }

    public function updatedSelectedDistrict($districtId)
    {
        $this->localities = Locality::where('district_id', $districtId)->get();

        $this->reset(['selectedLocality']);
    }


    public function messages()
    {
        return [
            'name.required' => 'Le nom est requis.',
            'first_name.required' => 'Le prénom est requis.',
            'email.required' => "L'email est requis.",
            'telephone.required' => 'Le numéro de téléphone est requis.',
            'password.required' => 'Le mot de passe est requis.',
            'password_confirmation.required' => 'La confirmation du mot de passe est requise.',
            'role_id.required' => "Le type d'utilisateur est requis.",
            'selectedDepartment.required' => "Le département est requis.",
            'selectedMunicipality.required' => "La commune est requise.",
            'selectedDistrict.required' => "L'arrondissement est requis.",
            'selectedLocality.required' => "La localité est requise.",
        ];
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
            'department_id'=> $this->selectedDepartment,
            'municipality_id'=> $this->selectedMunicipality,
            'district_id'=> $this->selectedDistrict,
            'locality_id'=> $this->selectedLocality,
        ]);

        return redirect()->route('login')->with('success', 'Inscription réussie.');
    }

    public function render()
    {
        return view('livewire.register', [
            'roles' => $this->roles,
            'departments' => $this->departments,
            'municipalities' => $this->municipalities,
            'districts' => $this->districts,
            'localities' => $this->localities,
        ]);
    }
}
