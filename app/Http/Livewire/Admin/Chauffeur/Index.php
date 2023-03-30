<?php

namespace App\Http\Livewire\Admin\Chauffeur;

use Livewire\Component;
use App\Models\Chauffeur;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $chauffeur_id;

    public function deleteChauffeur($chauffeur_id) {
        $this->chauffeur_id = $chauffeur_id;
    }

    public function destroyChauffeur() {
        $chauffeur = Chauffeur::find($this->chauffeur_id);

        $chauffeur->delete();
        session()->flash('message', 'Chauffeur supprimé !!!');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        $chauffeurs = Chauffeur::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.chauffeur.index', ['chauffeurs' => $chauffeurs]);
    }
}
