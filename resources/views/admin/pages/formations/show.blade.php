@extends('admin.layouts.app')
@section('content')
<section class="text-center p-5">
        <div class="show d-flex flex-column gap-3">
            <h1 class="text-center">Formation no : {{ $show->id }}</h1>
            <h1 class="text-center">{{ $show->nom }}</h1>
            <h4 class="text-center">{{ $show->description }}</h4>
        </div>
</section>
@endsection