@extends('layouts.mainlayout')
@section('content')
<div class="text-center">
    <h1>Liste des enseignants</h1>
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
                  <th scope="col">email</th>
                  <th scope="col">Fonction</th>
                </tr>
              </thead>
              @foreach ($enseignant as $ens)
              <tr>
                  <td>{{ $ens->id }}</td>
                  <td>{{ $ens->nom }}</td>
                  <td>{{ $ens->prenom }}</td>
                  <td>{{ $ens->telephone }}</td>
                  <td>{{ $ens->email }}</td>
                  <td>{{ $ens->fonction }}</td>

              </tr>
          @endforeach
            </table>


          </div>
        </div>

      </div>
    </div>


@endsection
