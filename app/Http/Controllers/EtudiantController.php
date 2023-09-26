<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiant = Etudiant::all();
        return view('etudiants.liste', compact('etudiant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etudiants.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([

        //     'nom'=>'required',
        //     'prenom'=>'required',
        //     'date_naiss'=>'required',
        //     'email'=>'required',
        //     'sexe'=>'required',
        //     'telephone'=>'required',
        //     'filiere'=>'required',
        //     'niveau'=>'required',


        // ]);


        $etudiants = new Etudiant();
        $etudiants->nom = $request->nom;
        $etudiants->prenom = $request->prenom;
        $etudiants->date_naiss = $request->date_naiss;
        $etudiants->email = $request->email;
        $etudiants->sexe = $request->sexe;
        $etudiants->telephone = $request->telephone;
        $etudiants->filiere = $request->filiere;
        $etudiants->niveau = $request->niveau;
        $etudiants->save();

        return redirect()->route('etudiants.create')->with('status', 'Etudiant a été ajouté avec succes.');
        

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
