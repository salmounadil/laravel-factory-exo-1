@extends('admin.layouts.app')
@section('content')
<section class="d-flex flex-column justify-content-center align-items-center gap-5">
    <h1 class="text-center p-5">Formations</h1>
    <a href={{ route('newFormation') }} class="btn btn-success">New Formation</a>
    <div class="eleves d-flex flex-wrap p-3 gap-3 justify-content-center">
        @foreach ($formations as $formation )
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
                <h4>{{ $formation->id }}</h4>
              <h5 class="card-title"><b>{{ $formation->nom }}</b></h5>
              <p class="card-text">{{ $formation->description }}</p>
              <div class="d-flex flex-column gap-2 align-items-center">
              <a href="/show/formations/{{ $formation->id }}" class="a btn btn-primary">Fiche complete</a>
              <a href="/formations/edit/{{ $formation->id }}" class="a btn btn-warning">Edit</a>
              <form action="/formations/delete/{{ $formation->id }}" method="POST">
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