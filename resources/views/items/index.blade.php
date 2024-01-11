@extends('layouts.app')
@section('content')

<div class="container py-2">
    <h1 class="d-inline-block">Items Index</h1>
    <a href="{{route('items.create')}}" class="btn btn-success">Add new</a>
    <div class="row g-3 justify-content-center">
        @foreach($items as $item)
        @include('items.partials.card')
        @endforeach
    </div>
</div>

@endsection