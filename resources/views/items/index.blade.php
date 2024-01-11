@extends('layouts.app')
@section('content')

<div class="container py-2">
    <div class="row g-3 justify-content-center">
        <h1>Items Index</h1>
        @foreach($item as $data)
        @include('items.partials.card')
        @endforeach
    </div>
</div>

@endsection