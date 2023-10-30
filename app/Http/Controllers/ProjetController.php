<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjetRequest;
use App\Models\Projet;
use Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $projets = Projet::all(); // Récupérez tous les projets depuis la base de données.

        return view('dashboard', compact('projets')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjetRequest $request)
    {

        $Validateddata = $request->validated();

        $projet = new Projet;
        $projet->nom = $request->input('nom');
        $projet->date_debut = $request->input('date_debut');
        $projet->date_fin = $request->input('date_fin');
        $projet->created_by_id = Auth::user()->id;
        $projet->status = 'En cours';
        // $status = $projet->calculerStatut();
        // $projet->status = $status;
        $projet->save();

        return redirect()->route('projets.index')->with('success', 'Projet créé avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projet $projet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet)
    {
        //
    }
}
