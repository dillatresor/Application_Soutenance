@extends('layouts.mainlayout')
@section('content')

<div class="text-center">
    <h1>Liste des Maitres de Stage</h1>
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
              <tbody>


                @foreach ($maitreS as $mait)
                <tr>
                    <td>{{ $mait->id }}</td>
                    <td>{{ $mait->nom }}</td>
                    <td>{{ $mait->prenom }}</td>
                    <td>{{ $mait->telephone }}</td>
                    <td>{{ $mait->email }}</td>
                    <td>{{ $mait->fonction }}</td>

                </tr>
            @endforeach
          </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
