@extends('layouts.app')

@section('content')
    <h1>All classes</h1>

    @foreach ($types as $type)
        <img src="../../../public/images/icon_types/Barbarian.jpg" alt="{{ $type->name }}">
        <h2 class="text-primary">{{ $type->name }}</h2>
    @endforeach
@endsection
