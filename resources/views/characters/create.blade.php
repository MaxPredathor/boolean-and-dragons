@extends('layouts.app')
@section('content')
    <main>
        <section class="container">
            <form action="{{ route('characters.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid
                    @enderror"
                        id="name" aria-describedby="emailHelp" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid
                    @enderror" id="description"
                        aria-describedby="emailHelp"></textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="attack" class="form-label">Attack</label>
                    <input type="text" class="form-control @error('attack') is-invalid
                    @enderror"
                        id="attack" required>
                    @error('attack')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="defence" class="form-label">Defence</label>
                    <input type="text" class="form-control @error('defence') is-invalid
                    @enderror"
                        id="defence" required>
                    @error('defence')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="speed" class="form-label">Speed</label>
                    <input type="text" class="form-control @error('speed') is-invalid
                    @enderror"
                        id="speed" required>
                    @error('speed')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="life" class="form-label">Life</label>
                    <input type="text" class="form-control @error('life') is-invalid
                    @enderror"
                        id="life" required>
                    @error('life')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <a href="{{ route('characters.index') }}" class="btn btn-secondary">Return</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </main>
@endsection
