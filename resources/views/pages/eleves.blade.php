@extends('layouts.app')
@section('content')
    <section>
        <h1 class="text-center p-5">Eleves</h1>
        <div class="eleves d-flex flex-wrap p-3 gap-3 justify-content-center">
            @foreach ($eleves as $eleve )
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h4>{{ $eleve->id }}</h4>
                  <h5 class="card-title"><b>{{ $eleve->prenom }} {{ $eleve->nom }}</b></h5>
                  <p class="card-text">{{ $eleve->age }} ans</p>
                  <p class="card-text">Demandeur d'emploi ? <b>{{ $eleve->etat === 1 ? "Oui" : "Non" }}</b></p>
                </div>
              </div>
            @endforeach
        </div>
    </section>
@endsection