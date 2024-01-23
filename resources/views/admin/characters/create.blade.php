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
                <div class="row">
                    <h2>Type</h2>
                    @foreach ($types as $type)
                        <div class="col-2">
                            <input id="type{{ $type->id }}"
                                class="form-radio @error('type') is-invalid
                            @enderror"
                                type="radio" name="type_id" value="{{ $type->id }}">
                            <label for="type{{ $type->id }}">
                                <img class="w-25" src="{{ asset('storage/' . $type->image) }}" alt="{{ $type->name }}">
                                <p>{{ $type->name }}</p>
                            </label>
                        </div>
                    @endforeach
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <h2>Items</h2>
                    @foreach ($itemsSorted as $key => $itemType)
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $key }}" aria-expanded="true"
                                        aria-controls="collapse{{ $key }}">
                                        {{ $itemType[0]->category }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $key }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body row">
                                        @foreach ($itemType as $item)
                                            <div class="col-2">
                                                <input id="item{{ $item->id }}"
                                                    class="form-checkbox @error('item') is-invalid
                                                @enderror"
                                                    type="checkbox" name="items[]"
                                                    @if (in_array($item->id, old('items', []))) checked @endif
                                                    value="{{ $item->id }}">
                                                <label for="item{{ $item->id }}">
                                                    <img class="w-25" src="{{ asset('storage/' . $item->image) }}"
                                                        alt="{{ $item->name }}">
                                                    <p>{{ $item->name }}</p>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @error('type')
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
