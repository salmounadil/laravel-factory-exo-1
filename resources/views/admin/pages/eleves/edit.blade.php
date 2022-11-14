@extends('admin.layouts.app')
@section('content')
    <section>
        <h1 class="text-center p-5">Edit Eleve no {{ $edit->id }}</h1>
        <div class="form">
            <form class="d-flex flex-column gap-3 p-5" action='/eleves/update/{{ $edit->id }}' method="POST">
                @csrf
                <label class="text-center" for="nom">Nom</label>
                <input type="text" name="nom" id="" value="{{ $edit->nom }}">
                <label class="text-center" for="prenom">Prénom</label>
                <input type="text" name="prenom" id="" value="{{ $edit->prenom }}">
                <label class="text-center" for="age">Age</label>
                <input type="text" name="age" id="" value="{{ $edit->age }}">
                <label class="text-center" for="etat">Etat</label>
                <input type="text" name="etat" id="" value="{{ $edit->etat }}">
                <button class="btn btn-success" type="submit">Update</button>
            </form>
        </div>
    </section>
@endsection