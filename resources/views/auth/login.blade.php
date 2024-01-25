@extends('layouts.app')

@section('content')
<div id="login">
    <div id="form-container">
        <div class="container">
            <form method="POST" class="" action="{{ route('login') }}">
                @csrf
                <div class="small-container py-2">
                    <div class="pre-input">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email"
                            autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="small-container py-2">
                    <div class="pre-input">
                        <input id="password" type="password" placeholder="Password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div id="remember" class="form-check my-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                        ? 'checked' : '' }}>
                    <label class="form-check-label mx-1" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                {{-- <div class="box">
                    <div class="base">
                    </div>
                </div> --}}
                <div class="small-container text-center">
                    <button type="submit" id="my-login-button" class="my-btn-hover my-btn pre-input login-button">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="small-container ">
                    <div class="pre-input my-square">
                    </div>
                </div>
                @if (Route::has('password.request'))
                <a class="btn text-white my-password" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </form>
        </div>
    </div>
</div>


<!-- <div id="login">
        <video muted>
            <source src="{{ Vite::asset('public/images/video/login-video.mp4') }}" type="video/mp4">
        </video>
        <audio crossOrigin="anonymous" id="login-sound">
            <source src="{{ Vite::asset('public/images/audio/login-audio.mp3') }}" type="audio/mpeg">
        </audio>
        <div id="overlay">
            <button id="login-button" class="btn btn-danger">Login</button>
        </div>
        <script>
            const button = document.getElementById('login-button');
            button.addEventListener('click', () => {
                document.getElementById('overlay').style.display = 'none';
                document.getElementById('login-sound').play();
                document.getElementById('login-sound').volume = 0.2;
                document.querySelector('video').play();
            });
        </script>
        <div id="login-card" class="row justify-content-center position-absolute bg-*">
            <div class="bg-*">
                <form method="POST" class="text-white" action="{{ route('login') }}">
                    @csrf
                    <div class="small-container">
                        <div class="pre-input">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email"
                                autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="small-container">
                        <div class="pre-input">
                            <input id="password" type="password" placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div id="remember" class="form-check my-3">
                        <input class="form-check-input ms-5" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label mx-3" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    {{-- <div class="box">
                        <div class="base">

                        </div>
                    </div> --}}


                    <div class="small-container">
                        <button type="submit" id="my-login-button" class="btn btn-primary pre-input login-button">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="small-container ">
                        <div class="pre-input my-square">

                        </div>
                    </div>

                    @if (Route::has('password.request'))
                        <a class="btn text-white my-password" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                </form>
            </div>
        </div>
    </div> -->
@endsection