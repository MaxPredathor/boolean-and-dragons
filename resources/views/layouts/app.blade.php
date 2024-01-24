<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
    {{-- librerie js --}}
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
</head>

<body>
    <div id="app">

        <div class="d-flex">
            <section id="lateral">
                <div id="my-top-lateral">
                    <div class="my-img-cont">
                        <a class="" href="{{ url('/') }}">

                            <img src="{{ asset('images/logo/logo.png') }}" alt="">

                            {{-- config('app.name', 'Laravel') --}}
                        </a>
                    </div>
                </div>
                <div class="container">
                    <div class="row flex-column align-items-center justify-content-center">
                        @if(!Auth::check())
                        <div class="col">
                            Login to see more
                        </div>
                        @else
                        <h3>Navigation menu</h3>
                        <div class="col">
                            <h5>Characters</h5>
                            <ul>
                                <li>
                                    <a href="{{ route('admin.characters.index')}}"> All characters</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.characters.create')}}"> Create new</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <h5>Types</h5>
                            <ul>
                                <li>
                                    <a href="{{ route('admin.types.index')}}"> All types</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.types.create')}}"> Create new</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <h5>Items</h5>
                            <ul>
                                <li>
                                    <a href="{{ route('admin.items.index')}}"> All items</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.items.create')}}"> Create new</a>
                                </li>
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </section>
            <main>
                @include('layouts.partials.header')
                @yield('content')
            </main>
        </div>
</body>

</html>