@extends('layouts.app')
@section('content')
    <section>
        <h1 class="text-center p-5">Batiments</h1>
        <div class="eleves d-flex flex-wrap p-3 gap-3 justify-content-center">
            @foreach ($batiments as $batiment )
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h4>{{ $batiment->id }}</h4>
                  <h5 class="card-title"><b>{{ $batiment->nom }}</b></h5>
                  <p class="card-text">{{ $batiment->description }}</p>
                </div>
              </div>
            @endforeach
        </div>
    </section>
@endsection