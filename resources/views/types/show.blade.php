@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h1>{{ $type->name }}</h1>
            <div class="d-flex">
                <a href="{{ route('types.index') }}" class="btn btn-secondary me-2">Back</a>
                <a href="{{ route('types.edit', $type->id) }}" class="btn btn-success me-2">Edit</a>
                <form action="{{ route('types.destroy', $type->id) }}" method="POST" class="me-2" id="delete-form">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger cancel-button" type="submit"
                        data-item-title="{{ $type->name }}">Delete</button>
                </form>
            </div>
        </div>

        <div markdown="1">{{ $type->desc }}</div>
    </div>

    @include('partials.modal_delete_type')
@endsection
