<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Directeurmemoire;
use Illuminate\Http\Request;

class DirecteurmemoireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directeurM = Directeurmemoire::all();
       return view('Dm.liste', compact('directeurM'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dm.ajout');
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
            'adresse' => 'required',
            'fonction' => 'required',

           ]);

           $directeurM = new Directeurmemoire();
           $directeurM->nom = $request->nom;
           $directeurM->prenom = $request->prenom;
           $directeurM->telephone = $request->telephone;
           $directeurM->adresse = $request->adresse;
           $directeurM->fonction = $request->fonction;
           $directeurM->save();

           return redirect()->route('dm.create')->with('status', 'le directeur de memoire a bien été ajouter avec succès');
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
