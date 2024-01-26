@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<div class="container">
    <h2>Update {{ $type->name }}</h2>
    {{-- @if ($errors->any())
    <div class="alert alert-danger my-2">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <div class="row">
        <form action="{{ route('admin.types.update', $type->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input required value="{{ $type->name }}" class="form-control my-1 @error('name') is-invalid @enderror"
                type="text" id="title" name="name" placeholder="name">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <input required class="form-control my-1 @error('boosted_stat') is-invalid @enderror" type="text"
                id="boosted_stat" name="boosted_stat" placeholder="Boosted stat">
            @error('boosted_stat')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <textarea required rows="8" class="form-control my-1 @error('desc') is-invalid @enderror" type="text"
                id="desc" name="desc" placeholder="desc">{{ $type->desc }}</textarea>
            @error('desc')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="image">Image</label>
            <div class="my-3" style="width: 200px;">
                <img class="w-100" id="uploadPreview" src="{{ asset('storage/' . $type->image) }}" alt="Placeholder">
            </div>
            <input type="file" accept="image/*" name="image" id="image" class="form-control my-1">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="base_sprite">Base Sprite</label>
            <div class="my-3" style="width: 200px;">
                <img class="w-100" id="uploadPreview" src="{{ asset('storage/' . $type->base_sprite) }}"
                    alt="Placeholder">
            </div>
            <input type="file" accept="image/*" name="base_sprite" id="base_sprite" class="form-control my-1">
            @error('base_sprite')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="ascended_sprite">Ascended Sprite</label>
            <div class="my-3" style="width: 200px;">
                <img class="w-100" id="uploadPreview" src="{{ asset('storage/' . $type->ascended_sprite) }}"
                    alt="Placeholder">
            </div>
            <input type="file" accept="image/*" name="ascended_sprite" id="ascended_sprite" class="form-control my-1">
            @error('ascended_sprite')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <button class="btn
                            btn-primary mt-2" type="submit">Add</button>
            <input type="reset" class="btn btn-danger mt-2" value="Reset">
        </form>
    </div>
</div>


@endsection