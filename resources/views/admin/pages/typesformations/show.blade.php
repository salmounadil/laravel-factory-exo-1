@extends('admin.layouts.app')
@section('content')
<section class="text-center p-5">
        <div class="show d-flex flex-column gap-3">
            <h1 class="text-center">Type formation no : {{ $show->id }}</h1>
            <h1 class="text-center">{{ $show->nom }}</h1>
        </div>
</section>
@endsection