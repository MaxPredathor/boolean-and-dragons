@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="d-inline-block">Items Show</h1>
    <a href="{{route('items.index')}}" class="btn btn-danger">Return</a>
    <div class="row justify-content-center">
        <div class="col">
            <div class="text-center border p-1">
                <h2 class="fs-6 ">Name: {{$item->name}}</h2>
                <p class="fst-italic m-0">Slug: {{$item->slug}}</p>
                <p class="fst-italic m-0">Type: {{$item->type}}</p>
                <p class="fst-italic m-0">Weight: {{$item->weight}}</p>
                <p class="fst-italic m-0">Cost: {{$item->cost}}</p>
                <div>
                    <a href="{{route('items.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection