@extends('layouts.mainlayout')
@section('content')

@if (session('status'))
                    <div class="alert alert-succès">
                        {{ session('status') }}
                    </div>
     @endif

     <div class="text-center">
    <h1>Formulaire d'ajout</h1>
     </div>

     <form class="row g-3" action="{{ route('enseignants.store') }}" method="POST">
        @csrf
    <div class="row">
        <div class="col-lg-6 mt-3">
            <label for="inputNom" class="form-label">Nom</label>
          <input type="text" class="form-control" placeholder="Nom" aria-label="First name">

        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputPrenom" class="form-label">Prenom</label>
          <input type="text" class="form-control" placeholder="Prenom" aria-label="Last name">

        </div>

        <div class="col-lg-6 mt-3">
            <label for="inputTelephone" class="form-label">Telephone</label>
          <input type="text" class="form-control" placeholder="Telephone" aria-label="First name">

        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputEmail" class="form-label">Email</label>
          <input type="text" class="form-control" placeholder="Email" aria-label="Last name">
        </div>
        <div class="col-lg-12 mt-3">
            <label for="inputFonction" class="form-label">Fonction</label>
            <input type="text" class="form-control" placeholder="Fonction" aria-label="Last name">
        </div>

      </div>
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <button type="reset" class="btn btn-danger">Annuler</button>
      </div>
    </form>
@endsection
