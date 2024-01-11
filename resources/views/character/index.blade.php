@extends('layouts.app')
@section('content')
    <main>
        <section class="container">
            <h1>Characters</h1>
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
                                <a href="{{ route('character.show', $character->id) }}" class="btn btn-primary">Show
                                    Details</a>
                                {{-- <form action="{{ route('character.destroy', $character->id) }}" class="d-inline"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger position-static cancel-button"
                                    data-item-title="{{ $character->title }}">Delete</button>
                            </form> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
