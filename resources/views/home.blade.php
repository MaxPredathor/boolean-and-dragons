@extends('layouts.app')
@section('content')
<section id="my-home-not-logged" class="container-fluid">
    <div class="text-center">
        <h1>Boolck-Office Management</h1>
        <p class="m-0 p-0">Login to star working</p>
    </div>

    <a href="{{ route('admin.characters.index') }}">Characters</a>
    <a href="{{ route('admin.types.index') }}">Types</a>
    <a href="{{ route('admin.items.index') }}">Items</a>
</section>
@endsection