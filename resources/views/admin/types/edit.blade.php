@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <main>

        <div class="">
            <div class="container">
                <h2>Update {{ $type->name }}</h2>
                <div class="row">
                    <form action="{{ route('admin.types.update', $type->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input required value="{{ $type->name }}"
                            class="form-control my-1 @error('name') is-invalid @enderror" type="text" id="title"
                            name="name" placeholder="name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <textarea required rows="8" class="form-control my-1 @error('series') is-invalid @enderror" type="text"
                            id="series" name="desc" placeholder="desc">{{ $type->desc }}</textarea>
                        @error('desc')
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
