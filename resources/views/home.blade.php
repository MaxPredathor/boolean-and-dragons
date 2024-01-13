@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Section title</h1>
        <p>section content</p>
        <a href="{{ route('characters.index') }}">Characters</a>
        <a href="{{ route('types.index') }}">Types</a>
        <a href="{{ route('items.index') }}">Items</a>
    </section>
@endsection
