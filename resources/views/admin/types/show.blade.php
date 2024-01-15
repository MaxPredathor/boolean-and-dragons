{{-- @php
    use GrahamCampbell\Markdown\Facades\Markdown;
    $markdownContent = $type->desc; // La tua stringa Markdown
    $htmlContent = Markdown::convertToHtml($markdownContent); // Utilizza la libreria di Markdown di Laravel
@endphp --}}
@include('layouts.partials.header')
@extends('layouts.app')


@section('content')
    <div class="container">
        <div>
            <h1>{{ $type->name }}</h1>
            <div class="d-flex">
                <a href="{{ route('admin.types.index') }}" class="btn btn-secondary me-2">Back</a>
                <a href="{{ route('admin.types.edit', $type->slug) }}" class="btn btn-success me-2">Edit</a>
                <form action="{{ route('admin.types.destroy', $type->slug) }}" method="POST" class="me-2" id="delete-form">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger cancel-button" type="submit"
                        data-item-title="{{ $type->name }}">Delete</button>
                </form>
            </div>
        </div>

        {{-- <p id="markdown-content">{!! $htmlContent !!}</p> --}}
        <p>{{ $type->desc }}</p>
    </div>

    @include('partials.modal_delete')
@endsection
