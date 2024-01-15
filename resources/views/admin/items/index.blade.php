@include('layouts.partials.header')
@extends('layouts.app')
@section('content')
    <div class="container py-2">
        <h1 class="d-inline-block">Items Index</h1>
        <a href="{{ route('admin.items.create') }}" class="btn btn-success ms-2 mb-2">Add new</a>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row g-3 justify-content-center">
            @foreach ($items as $item)
                @include('admin.items.partials.card')
            @endforeach
        </div>
    </div>
@endsection
