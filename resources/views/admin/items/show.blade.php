@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="d-inline-block">Items Show</h1>
        <a href="{{ route('admin.items.index') }}" class="btn btn-danger">Return</a>
        <div class="row justify-content-center">
            <div class="col">
                <div class="text-center border p-1 text-white rounded" style="background-color: #272822">
                    <h2 class="fs-6 ">Name: {{ $item->name }}</h2>
                    <div>
                        <img class="w-25" src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                    </div>
                    <p class="fst-italic m-0">Type: {{ $item->type }}</p>
                    <p class="fst-italic m-0">Weight: {{ $item->weight }}</p>
                    <p class="fst-italic m-0">Cost: {{ $item->cost }}</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('admin.items.edit', $item->slug) }}" class="btn btn-primary mb-4 mt-2">Edit</a>
                        <form class="mb-4 mt-2" action="{{ route('admin.items.destroy', $item->slug) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button id="confirm-delete" class="cancel-button btn btn-danger"
                                data-item-title="{{ $item->name }}" type="submit">Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.modal_delete')
@endsection
