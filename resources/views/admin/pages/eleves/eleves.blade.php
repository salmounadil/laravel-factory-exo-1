@extends('admin.layouts.app')
@section('content')
<section class="d-flex flex-column justify-content-center align-items-center gap-5">
    <h1 class="text-center p-5">Eleves</h1>
    <a href={{ route('newEleve') }} class="btn btn-success">New Eleve</a>
    <div class="eleves d-flex flex-wrap p-3 gap-3 justify-content-center">
        @foreach ($eleves as $eleve )
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
                <h4>{{ $eleve->id }}</h4>
              <h5 class="card-title"><b>{{ $eleve->prenom }} {{ $eleve->nom }}</b></h5>
              <p class="card-text">{{ $eleve->age }} ans</p>
              <p class="card-text">Demandeur d'emploi ? <b>{{ $eleve->etat === 1 ? "Oui" : "Non" }}</b></p>
              <div class="d-flex flex-column gap-2 align-items-center">
                <a href="/show/eleves/{{ $eleve->id }}" class="a btn btn-primary">Fiche complete</a>
                <a href="/eleves/edit/{{ $eleve->id }}" class="a btn btn-warning">Edit</a>
                <form action="/eleves/delete/{{ $eleve->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</section>
@endsection