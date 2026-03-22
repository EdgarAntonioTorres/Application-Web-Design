@extends('layouts.app')

@section('content')
<h1>Edit Superhero</h1>

<form action="{{ route('superheroes.update', $superhero) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <input type="text" name="real_name" value="{{ $superhero->real_name }}" class="form-control">
    </div>

    <div class="mb-3">
        <input type="text" name="hero_name" value="{{ $superhero->hero_name }}" class="form-control">
    </div>

    <div class="mb-3">
        <input type="text" name="photo_url" value="{{ $superhero->photo_url }}" class="form-control">
    </div>

    <div class="mb-3">
        <textarea name="additional_info" class="form-control">{{ $superhero->additional_info }}</textarea>
    </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection