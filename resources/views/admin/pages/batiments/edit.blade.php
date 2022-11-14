@extends('admin.layouts.app')
@section('content')
    <section>
        <h1 class="text-center p-5">Edit Batiment no {{ $edit->id }}</h1>
        <div class="form">
            <form class="d-flex flex-column gap-3 p-5" action='/batiments/update/{{ $edit->id }}' method="POST">
                @csrf
                <label class="text-center" for="nom">Nom</label>
                <input type="text" name="nom" id="" value="{{ $edit->nom }}">
                <label class="text-center" for="description">Description</label>
                <input type="text" name="description" id="" value="{{ $edit->description }}">
                <button class="btn btn-success" type="submit">Update</button>
            </form>
        </div>
    </section>
@endsection