@extends('admin.layouts.app')
@section('content')
<section class="d-flex flex-column justify-content-center align-items-center gap-5">
    <h1 class="text-center p-5 ">Batiments</h1>
    <a href={{ route('newBatiment') }} class="btn btn-success">New Batiment</a>
    <div class="eleves d-flex flex-wrap p-3 gap-3 justify-content-center">
        @foreach ($batiments as $batiment )
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
                <h4>{{ $batiment->id }}</h4>
              <h5 class="card-title"><b>{{ $batiment->nom }}</b></h5>
              <p class="card-text">{{ $batiment->description }}</p>
              <div class="d-flex flex-column gap-2 align-items-center">
              <a href="/show/batiments/{{ $batiment->id }}" class="a btn btn-primary">Fiche complete</a>
              <a href="/batiments/edit/{{ $batiment->id }}" class="a btn btn-warning">Edit</a>
              <form action="/batiments/delete/{{ $batiment->id }}" method="POST">
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