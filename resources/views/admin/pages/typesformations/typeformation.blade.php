@extends('admin.layouts.app')
@section('content')
<section class="d-flex flex-column justify-content-center align-items-center gap-5">
    <h1 class="text-center p-5">Types Formations</h1>
    <a href={{ route('newTypeformation') }} class="btn btn-success">New Type Formation</a>
    <div class="eleves d-flex flex-wrap p-3 gap-3 justify-content-center">
        @foreach ($typesformations as $typesformation )
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
                <h4>{{ $typesformation->id }}</h4>
              <h5 class="card-title"><b>{{ $typesformation->nom }}</b></h5>
              <div class="d-flex flex-column gap-2 align-items-center">
              <a href="/show/typesformations/{{ $typesformation->id }}" class="a btn btn-primary">Fiche complete</a>
              <a href="/typesformations/edit/{{ $typesformation->id }}" class="a btn btn-warning">Edit</a>
              <form action="/typesformations/delete/{{ $typesformation->id }}" method="POST">
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