@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            All types</h1>
        <a href="{{ route('admin.types.create') }}" class="btn btn-success">Add a new class</a>
        <div class="row">
            @if (session()->has('message'))
                <div class="alert alert-success my-5">{{ session('message') }}</div>
            @endif
            @foreach ($types as $type)
                <div class="col-3 my-2">
                    <div class="card h-100 bg-secondary">
                        <img src="{{ $type->base_sprite ? asset('storage/' . $type->base_sprite) : 'https://cdn.vectorstock.com/i/preview-1x/65/30/default-image-icon-missing-picture-page-vector-40546530.jpg' }}"
                            style="height: 250px;" class="card-img-top w-100" alt="{{ $type->name }}">
                        <div class="card-body d-flex justify-content-between">
                            <h3 class="card-title">{{ $type->name }}</h3>
                            <a href="{{ route('admin.types.show', $type->slug) }}" class="btn btn-danger">View More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
