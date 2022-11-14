@extends('admin.layouts.app')
@section('content')
<section class="text-center p-5">
        <div class="show d-flex flex-column gap-3">
            <h1 class="text-center">Eleve no : {{ $show->id }}</h1>
            <h1 class="text-center">{{ $show->nom }} {{ $show->prenom }}</h1>
            <h1 class="text-center">{{ $show->age }} ans</h1>
            <h4 class="text-center">Demandeur d'emploi ? {{ $show->etat === 1 ? "Oui" : "Non" }}</h4>
        </div>
</section>
@endsection