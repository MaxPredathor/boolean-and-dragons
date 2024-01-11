@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Section title</h1>
        <p>section content</p>
        <a href="{{ route('character.index') }}">Characters</a>
    </section>
@endsection
