@extends('layouts.app')
@section('content')
    <main class="bg-light py-0">
        <section id="show">
            <div class="blue-stripe">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="portrait">
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-12 d-flex">
                        <div class="px-4">
                            <h2 class="py-4">{{ $comic->title }}</h2>
                            <div id="button">
                                <div class="w-75 d-flex justify-content-between align-items-center">
                                    <div class="px-5">U.S. Price <span>{{ $comic->price }}</span></div>
                                    <div class="px-5">AVAILABLE</div>
                                </div>
                                <div class="w-25">
                                    <p class="text-center">Check Availability</p>
                                </div>
                            </div>
                            <p class="desc py-4">{{ $comic->description }}</p>
                            <button class="btn btn-primary position-static"> <a class="text-white"
                                    href="{{ route('comics.edit', $comic->id) }}">Update</a>
                            </button>
                        </div>
                        <div class="d-flex flex-column py-4">
                            <h6 class="text-end">ADVERTISMENT</h6>
                            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="talent-specs" class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3>Talent</h3>
                            <div class="d-flex justify-content-between">
                                <h6 class="w-50">Art by:</h6>
                                <p>José Luis García-López, Clay Mann, Rafael Albuquerque, Patrick Gleason, Dan Jurgens, Joe
                                    Shuster, Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee</p>
                            </div>
                            <div class="d-flex justify-content-between pt-3">
                                <h6 class="w-50">Written by:</h6>
                                <p>Brad Meltzer, Tom King, Scott Snyder, Geoff Johns, Brian Michael Bendis, Paul Dini,
                                    Louise Simonson, Richard Donner, Marv Wolfman, Peter J. Tomasi, Dan Jurgens, Jerry
                                    Siegel, Paul Levitz</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <h3>Specs</h3>
                            <div class="d-flex justify-content-between">
                                <h6 class="w-50">Series:</h6>
                                <p class="text-uppercase fw-bold">{{ $comic['series'] }}</p>
                            </div>
                            <div class="d-flex justify-content-between pt-3">
                                <h6 class="w-50">U.S. Price:</h6>
                                <span class="fw-bold">{{ $comic['price'] }}</span>
                            </div>
                            <div class="d-flex justify-content-between pt-3">
                                <h6 class="w-50">On Sale Date:</h6>
                                <span class="fw-bold">{{ $comic['sale_date'] }}</span>
                            </div>
                            <div class="d-flex justify-content-between pt-3">
                                <h6 class="w-50">Type:</h6>
                                <span class="fw-bold text-capitalize">{{ $comic['type'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection
