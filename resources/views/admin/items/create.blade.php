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
                <form action="{{ route('admin.items.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name">Name:</label>
                        <input required class="form-control my-1" type="text" id="name" name="name"
                            placeholder="Name">
                    </div>
                    <div>
                        <label for="slug">Slug:</label>
                        <input required class="form-control my-1" type="text" id="slug" name="slug"
                            placeholder="Slug">
                    </div>
                    <div>
                        <label for="category">Category</label>
                        <input required class="form-control my-1" type="text" id="category" name="category"
                            placeholder="Category">
                    </div>
                    <div>
                        <label for="type">Type:</label>
                        <input required class="form-control my-1" type="text" id="type" name="type"
                            placeholder="Type">
                    </div>
                    <div>
                        <label for="weight">Weight:</label>
                        <input required class="form-control my-1" type="text" id="weight" name="weight"
                            placeholder="Weight">
                    </div>
                    <div>
                        <label for="cost">Cost:</label>
                        <input required class="form-control my-1" type="text" id="cost" name="cost"
                            placeholder="Cost">
                    </div>
                    <button class="btn btn-primary my-1" type="submit">Add</button>
                    <button class="btn btn-primary my-1" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>

@endsection
