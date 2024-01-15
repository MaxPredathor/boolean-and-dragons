@extends('layouts.app')
@section('content')

    <div class="bg-black text-white position-relative py-5">
        <div class="container">
            <span>
                <a class="btn btn-danger my-1" href="{{ route('admin.items.index') }}">
                    Return
                </a>
            </span>
            @if ($errors->any())
                <div class="alert alert-danger my-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <form action="{{ route('admin.items.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name">Name:</label>
                        <input value="{{ old('name', $item->name) }}" required class="form-control my-1" type="text"
                            id="name" name="name" placeholder="{{ $item->name }}">
                    </div>
                    <div>
                        <label for="slug">Slug:</label>
                        <input value="{{ old('slug', $item->slug) }}" required class="form-control my-1" type="text"
                            id="slug" name="slug" placeholder="{{ $item->slug }}">
                    </div>
                    <div>
                        <label for="category">Category</label>
                        <input value="{{ old('category', $item->category) }}" required class="form-control my-1"
                            type="text" id="category" name="category" placeholder="{{ $item->category }}">
                    </div>
                    <div>
                        <label for="type">Type:</label>
                        <input value="{{ old('type', $item->type) }}" required class="form-control my-1" type="text"
                            id="type" name="type" placeholder=" {{ $item->type }}">
                    </div>
                    <div>
                        <label for="weight">Weight:</label>
                        <input value="{{ old('weight', $item->weight) }}" required class="form-control my-1" type="text"
                            id="weight" name="weight" placeholder="{{ $item->weight }}">
                    </div>
                    <div>
                        <label for="cost">Cost:</label>
                        <input value="{{ old('cost', $item->cost) }}" required class="form-control my-1" type="text"
                            id="cost" name="cost" placeholder="{{ $item->cost }}">
                    </div>
                    <button class="btn btn-primary my-1" type="submit">Edit</button>
                    <button class="btn btn-primary my-1" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>

@endsection
