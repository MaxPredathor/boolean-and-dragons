@extends('layouts.app')
@section('content')
<main>
    <section class="container">
        <div>
            <h1>Characters</h1>
            <a href="{{ route('admin.characters.create') }}">Create new Character</a>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="row gy-4">
            @foreach ($characters as $character)
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/' . $character->image) }}" alt="{{ $character->name }}"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $character->name }}</h5>
                        <p class="card-text">{{ substr($character->description, 0, 100) . '...' }}</p>
                        <a href="{{ route('admin.characters.show', $character->slug) }}" class="btn btn-primary">Show
                            Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</main>
@endsection