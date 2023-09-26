@extends('layouts.mainlayout')
@section('content')

<div class="text-center">
    <h1>Formulaire d'ajout</h1>
</div>
<div class="mb-3">
    <label for="message-text" class="col-form-label">nom utilisateur</label>
    <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
  </div>
  <div class="mb-3">
    <label for="message-text" class="col-form-label">nom enseignant</label>
    <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
  </div>
  <div class="mb-3">
    <label for="message-text" class="col-form-label">nom directeur memoire</label>
    <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
  </div>
  <div class="mb-3">
    <label for="message-text" class="col-form-label">nom maitre stage</label>
    <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
  </div>
  <div class="mb-3">
    <label for="message-text" class="col-form-label">president jury</label>
    <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
@endsection
