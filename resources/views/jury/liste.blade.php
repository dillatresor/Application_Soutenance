@extends('layouts.mainlayout')

@section('content')
<div class="text-center">
    <h1>Liste des membres du jury</h1>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nom utilisateur</th>
        <th scope="col">nom enseignant</th>
        <th scope="col">nom dm</th>
        <th scope="col">nom ms</th>
        <th scope="col">nom president</th>
      </tr>
    </thead>

  </table>

@endsection
