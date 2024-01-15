@include('layouts.partials.header')
@extends('layouts.app')
@section('content')
    <main>
        <section class="container">
            <form action="{{ route('admin.characters.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid
                    @enderror"
                        id="name" required name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid
                    @enderror" id="description"
                        name="description">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="attack" class="form-label">Attack</label>
                    <input type="text" class="form-control @error('attack') is-invalid
                    @enderror"
                        id="attack" required name="attack" value="{{ old('attack') }}">
                    @error('attack')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="defence" class="form-label">Defence</label>
                    <input type="text" class="form-control @error('defence') is-invalid
                    @enderror"
                        id="defence" required name="defence" value="{{ old('defence') }}">
                    @error('defence')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="speed" class="form-label">Speed</label>
                    <input type="text" class="form-control @error('speed') is-invalid
                    @enderror"
                        id="speed" required name="speed" value="{{ old('speed') }}">
                    @error('speed')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="life" class="form-label">Life</label>
                    <input type="text" class="form-control @error('life') is-invalid
                    @enderror"
                        id="life" required name="life" value="{{ old('life') }}">
                    @error('life')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="mb-2">
                        <img class="w-25" id="uploadPreview" src="https://via.placeholder.com/300" alt="image-preview">
                    </div>
                    <input value="{{ old('image') }}" type="file"
                        class="form-control @error('image') is-invalid
                    @enderror" id="image"
                        name="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <a href="{{ route('admin.characters.index') }}" class="btn btn-secondary">Return</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </main>
@endsection
