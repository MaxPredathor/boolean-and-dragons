@extends('layouts.app')
@section('content')
    <main class="bg-light py-0">
        <section id="show">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="px-4">
                            <h2 class="py-4">{{ $character->name }}</h2>
                            <div class="d-flex">
                                <div id="button">
                                    <div class="w-75 d-flex flex-column justify-content-between align-items-center">
                                        <div class="px-5 d-flex">
                                            <div>
                                                <img class="icon-square"
                                                    src="{{ Vite::asset('public/images/characters_icons/attack.png') }}"
                                                    alt="">
                                            </div>
                                            <span>{{ $character->attack }}</span>
                                        </div>
                                        <div class="px-5">
                                            <div>
                                                <img class="icon-square"
                                                    src="{{ Vite::asset('public/images/characters_icons/defence.png') }}"
                                                    alt="">
                                            </div>
                                            <span>{{ $character->defence }}</span>
                                        </div>
                                        <div class="px-5">
                                            <div>
                                                <img class="icon-square"
                                                    src="{{ Vite::asset('public/images/characters_icons/speed.png') }}"
                                                    alt="">
                                            </div>
                                            <span>{{ $character->speed }}</span>
                                        </div>
                                        <div class="px-5">
                                            <div>
                                                <img class="icon-square"
                                                    src="{{ Vite::asset('public/images/characters_icons/life.png') }}"
                                                    alt="">
                                            </div>
                                            <span>{{ $character->life }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="w-50" src="{{ asset('storage/' . $character->image) }}"
                                    alt="{{ $character->name }}">
                            </div>
                            <p class="desc py-4">{{ $character->description }}</p>
                            <a href="{{ route('admin.characters.index') }}" class="btn btn-primary">Return</a>
                            <a href="{{ route('admin.characters.edit', $character->slug) }}"
                                class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.characters.destroy', $character->slug) }}" class="d-inline"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger cancel-button"
                                    data-item-title="{{ $character->name }}">Delete</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


        </section>
    </main>
    @include('partials.modal_delete')
@endsection
