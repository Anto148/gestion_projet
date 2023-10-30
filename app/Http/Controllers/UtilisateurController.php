<?php

namespace App\Http\Controllers;

use App\Http\Requests\UtilisateurRequest;
use App\Models\Utilisateur;
use Illuminate\Http\Request;



class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UtilisateurRequest $request)
    {

        $Validateddata = $request->validated();

        $user = new Utilisateur();
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email= $request->input('email');
        $user->save();

        return redirect()->route('utilisateurs.index')->with('success', 'user créé avec succès');



    }

    /**
     * Display the specified resource.
     */
    public function show(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Utilisateur $utilisateur)
    {
        //
    }
}
