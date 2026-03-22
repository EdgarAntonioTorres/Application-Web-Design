@extends('layouts.app')

@section('content')
<div class="card">
    @if($superhero->photo_url)
        <img src="{{ $superhero->photo_url }}" class="card-img-top">
    @endif

    <div class="card-body">
        <h3>{{ $superhero->hero_name }}</h3>
        <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
        <p>{{ $superhero->additional_info }}</p>

        <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection