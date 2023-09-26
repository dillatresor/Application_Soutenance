@extends('layouts.mainlayout')
@section('content')

<div class="text-center">
    <h1>Liste des Directeurs de Memoire</h1>
</div>
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="">

            <table class="table ">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">Telephone</th>
                  <th scope="col">Adresse</th>
                  <th scope="col">Fonction</th>
                </tr>
              </thead>


              @foreach ($directeurM as $dir)
              <tr>
                  <td>{{ $dir->id }}</td>
                  <td>{{ $dir->nom }}</td>
                  <td>{{ $dir->prenom }}</td>
                  <td>{{ $dir->telephone }}</td>
                  <td>{{ $dir->adresse }}</td>
                  <td>{{ $dir->fonction }}</td>

              </tr>
          @endforeach
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
