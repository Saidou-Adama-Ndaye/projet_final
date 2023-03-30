<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrajetFormRequest;
use App\Models\Trajet;

class TrajetController extends Controller
{
    public function index()
    {
        return view('admin.trajet.index');
    }

    public function create()
    {
        return view('admin.trajet.create');
    }

    public function store(TrajetFormRequest $request)
    {
        $validatedData = $request->validated();

        $trajet = new Trajet;
        $trajet->depart = $validatedData['depart'];
        $trajet->arriver = $validatedData['arriver'];
        $trajet->heure = $validatedData['heure'];
        $trajet->prix = $validatedData['prix'];

        $trajet->save();

        return redirect('admin/trajet')->with('message', 'Ajout réussi!!!');
    }

    public function edit(Trajet $trajet)
    {
        return view('admin.trajet.edit', compact('trajet'));
    }

    public function update(TrajetFormRequest $request, $trajet)
    {
        $validatedData = $request->validated();


        $trajet = Trajet::findOrFail($trajet);

        $trajet->depart = $validatedData['depart'];
        $trajet->arriver = $validatedData['arriver'];
        $trajet->heure = $validatedData['heure'];
        $trajet->prix = $validatedData['prix'];

        $trajet->update();

        return redirect('admin/trajet')->with('message', 'Modification réussie !!!');
    }
}
