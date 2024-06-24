<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Advertisement;
use Illuminate\Support\Facades\Auth;

class AgroEntrepriseDashboard extends Component
{
    public $advertisements;
    public $content;
    public $startDate;
    public $endDate;
    public $cost;
    public $advertisementId;
    public $isEditMode = false;

    public function mount()
    {
        if (Auth::check()) {
            if (Auth::user()->company) {
                $this->loadAdvertisements();
            } 
        } else {
            return redirect()->route('login');
        }
    }

    public function loadAdvertisements()
    {
        if (Auth::user()->company) {
            $this->advertisements = Advertisement::where('company_id', Auth::user()->company->id)->get();
        }
    }

    public function createAdvertisement()
    {
        if (!Auth::user()->company) {
            session()->flash('message', 'Vous devez d\'abord enregistrer votre entreprise.');
            return redirect()->route('companies.create');
        }

        $this->resetForm();
        $this->isEditMode = false;
    }

    public function storeAdvertisement()
    {
        if (!Auth::user()->company) {
            session()->flash('message', 'Vous devez d\'abord enregistrer votre entreprise.');
            return redirect()->route('companies.create');
        }

        $this->validate([
            'content' => 'required|string',
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'cost' => 'required|numeric',
        ]);

        Advertisement::create([
            'content' => $this->content,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
            'cost' => $this->cost,
            'company_id' => Auth::user()->company->id,
        ]);

        session()->flash('message', 'Annonce créée avec succès !');
        $this->loadAdvertisements();
        $this->resetForm();
    }

    public function editAdvertisement($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        $this->advertisementId = $advertisement->id;
        $this->content = $advertisement->content;
        $this->startDate = $advertisement->startDate;
        $this->endDate = $advertisement->endDate;
        $this->cost = $advertisement->cost;
        $this->isEditMode = true;
    }

    public function updateAdvertisement()
    {
        $this->validate([
            'content' => 'required|string',
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'cost' => 'required|numeric',
        ]);

        $advertisement = Advertisement::find($this->advertisementId);
        $advertisement->update([
            'content' => $this->content,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
            'cost' => $this->cost,
        ]);

        session()->flash('message', 'Annonce mise à jour avec succès !');
        $this->loadAdvertisements();
        $this->resetForm();
        $this->isEditMode = false;
    }

    public function deleteAdvertisement($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        $advertisement->delete();

        session()->flash('message', 'Annonce supprimée avec succès !');
        $this->loadAdvertisements();
    }

    protected function resetForm()
    {
        $this->content = '';
        $this->startDate = '';
        $this->endDate = '';
        $this->cost = '';
        $this->advertisementId = null;
        $this->isEditMode = false;
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.agro-entreprise-dashboard');
    }
}
