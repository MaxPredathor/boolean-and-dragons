@extends('layouts.app')
@section('content')
    <main>
        <section class="container">
            <div>
                <h1>Characters</h1>
                <a href="{{ route('characters.create') }}">Create new Character</a>
            </div>
            @if (session()->has('deleted'))
                <div class="alert alert-success">
                    {{ session('deleted') }}
                </div>
            @endif
            <div class="row gy-4">
                @foreach ($characters as $character)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="{{ $character->thumb }}" alt="{{ $character->name }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $character->name }}</h5>
                                <p class="card-text">{{ substr($character->description, 0, 100) . '...' }}</p>
                                <a href="{{ route('characters.show', $character->id) }}" class="btn btn-primary">Show
                                    Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
