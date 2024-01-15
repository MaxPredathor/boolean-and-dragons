@include('layouts.partials.header')
@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Section title</h1>
        <p>section content</p>
        <a href="{{ route('admin.characters.index') }}">Characters</a>
        <a href="{{ route('admin.types.index') }}">Types</a>
        <a href="{{ route('admin.items.index') }}">Items</a>
    </section>
@endsection
