@extends('layouts.app')
@section('content')
    <main>
        <section class="container">
            <form action="{{ route('characters.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nameInput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nameInput" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="attack" class="form-label">Attack</label>
                    <input type="text" class="form-control" id="attack">
                </div>
                <div class="mb-3">
                    <label for="attack" class="form-label">Defence</label>
                    <input type="text" class="form-control" id="attack">
                </div>
                <div class="mb-3">
                    <label for="attack" class="form-label">Speed</label>
                    <input type="text" class="form-control" id="attack">
                </div>
                <div class="mb-3">
                    <label for="attack" class="form-label">Life</label>
                    <input type="text" class="form-control" id="attack">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </main>
@endsection
