@extends('layouts.app')

@section('content')
<h1 class="mb-4">Superheroes</h1>

<a href="{{ route('superheroes.create') }}" class="btn btn-primary mb-3">Create New</a>

<div class="row">
@foreach($superheroes as $hero)
    <div class="col-md-4">
        <div class="card mb-3">
            @if($hero->photo_url)
                <img src="{{ $hero->photo_url }}" class="card-img-top">
            @endif

            <div class="card-body">
                <h5 class="card-title">{{ $hero->hero_name }}</h5>
                <p class="card-text">{{ $hero->real_name }}</p>

                <a href="{{ route('superheroes.show', $hero) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('superheroes.edit', $hero) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('superheroes.destroy', $hero) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection