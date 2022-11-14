@extends('admin.layouts.app')
@section('content')
    <h1 class="text-center p-5">New Type Formation</h1>
    <div class="form p-5">
        <form class="d-flex flex-column gap-3 p-5" action='/typesformations/newTypeformation' method="POST">
            @csrf
            <label class="text-center" for="nom">Nom</label>
            <input type="text" name="nom" id="">
            <button class="btn btn-success" type="submit">Create</button>
        </form>
    </div>
@endsection