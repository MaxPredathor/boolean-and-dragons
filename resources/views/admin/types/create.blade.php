@include('layouts.partials.header')
@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <main>

        <div class="">
            <div class="container">
                <h2>Create a new Character Type</h2>
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
                    <form action="{{ route('admin.types.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input required class="form-control my-1 @error('name') is-invalid @enderror" type="text"
                            id="name" name="name" placeholder="Name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <textarea required rows="8" class="form-control my-1 @error('desc') is-invalid @enderror" type="text"
                            id="desc" name="desc" placeholder="Description"></textarea>
                        @error('desc')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <label for="image">Image</label>
                        <div class="my-3" style="width: 200px;">
                            <img class="w-100" id="uploadPreview"
                                src="https://cdn.vectorstock.com/i/preview-1x/65/30/default-image-icon-missing-picture-page-vector-40546530.jpg"
                                alt="Placeholder">
                        </div>
                        <input type="file" accept="image/*" name="image" id="image" class="form-control my-1">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <button class="btn
                            btn-primary mt-2" type="submit">Add</button>
                        <input type="reset" class="btn btn-danger mt-2" value="Reset">
                    </form>
                </div>
            </div>
        </div>

        <div class="final-one">
            <div class="container">
                <div class="row">
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
