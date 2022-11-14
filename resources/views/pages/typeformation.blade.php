@extends('layouts.app')
@section('content')
    <section>
        <h1 class="text-center p-5">Types Formations</h1>
        <div class="eleves d-flex flex-wrap p-3 gap-3 justify-content-center">
            @foreach ($typesformations as $typesformation )
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h4>{{ $typesformation->id }}</h4>
                  <h5 class="card-title"><b>{{ $typesformation->nom }}</b></h5>
                </div>
              </div>
            @endforeach
        </div>
    </section>
@endsection