<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enseignant = Enseignant::all();
        return view('enseignants.liste', compact('enseignant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enseignants.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'nom'=> 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'fonction' => 'required',

           ]);

           $enseignant = new Enseignant ();
           $enseignant->nom = $request->nom;
           $enseignant->prenom = $request->prenom;
           $enseignant->telephone = $request->telephone;
           $enseignant->email = $request->email;
           $enseignant->fonction = $request->fonction;
           $enseignant->save();

           return redirect()->route('enseignants.create') ->with('status', 'enseignant a bien été ajouter avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
