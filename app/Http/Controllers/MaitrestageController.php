<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Maitrestage;
use Illuminate\Http\Request;

class MaitrestageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maitreS = Maitrestage::all();
        return view('Ms.liste', compact('maitreS'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Ms.ajout');
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

        $maitreS = new Maitrestage();
        $maitreS->nom = $request->nom;
        $maitreS->prenom = $request->prenom;
        $maitreS->telephone = $request->telephone;
        $maitreS->email = $request->email;
        $maitreS->fonction = $request->fonction;
        $maitreS->save();

        return redirect()->route('ms.create')->with('status', 'le maitre de stage a bien été ajouter avec succès');

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
