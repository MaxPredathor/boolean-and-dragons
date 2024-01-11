@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            All classes</h1>
        <a href="{{ route('types.create') }}" class="btn btn-success">Add a new class</a>
        <div class="row">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            @foreach ($types as $type)
                <div class="col-3 my-2">
                    <div class="card h-100">
                        <img src="{{ Vite::asset("/public/images/icon_types/$type->name.jpg") }}" style="height: 300px;"
                            class="card-img-top w-100" alt="{{ $type->name }}">
                        <div class="card-body d-flex justify-content-between">
                            <h3 class="card-title">{{ $type->name }}</h3>
                            <a href="{{ route('types.show', $type->id) }}" class="btn btn-danger">View More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
