@extends('layouts.app')
@section('content')
    <section>
        <h1 class="text-center p-5">Formations</h1>
        <div class="eleves d-flex flex-wrap p-3 gap-3 justify-content-center">
            @foreach ($formations as $formation )
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h4>{{ $formation->id }}</h4>
                  <h5 class="card-title"><b>{{ $formation->nom }}</b></h5>
                  <p class="card-text">{{ $formation->description }}</p>
                </div>
              </div>
            @endforeach
        </div>
    </section>
@endsection