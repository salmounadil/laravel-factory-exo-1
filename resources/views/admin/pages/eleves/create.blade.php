@extends('admin.layouts.app')
@section('content')
    <h1 class="text-center p-5">New Eleve</h1>
    <div class="form p-5">
        <form class="d-flex flex-column gap-3 p-5" action='/eleves/newEleve' method="POST">
            @csrf
            <label class="text-center" for="nom">Nom</label>
            <input type="text" name="nom" id="">
            <label class="text-center" for="prenom">Prénom</label>
            <input type="text" name="prenom" id="">
            <label class="text-center" for="age">Age</label>
            <input type="text" name="age" id="">
            <label class="text-center" for="etat">Etat</label>
            <input type="text" name="etat" id="">
            <button class="btn btn-success" type="submit">Create</button>
        </form>
    </div>
@endsection