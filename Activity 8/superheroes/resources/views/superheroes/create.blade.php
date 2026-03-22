@extends('layouts.app')

@section('content')
<h1>Create Superhero</h1>

<form action="{{ route('superheroes.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Real Name</label>
        <input type="text" name="real_name" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Hero Name</label>
        <input type="text" name="hero_name" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Photo URL</label>
        <input type="text" name="photo_url" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Additional Info</label>
        <textarea name="additional_info" class="form-control"></textarea>
    </div>

    <button class="btn btn-success">Save</button>
</form>
@endsection