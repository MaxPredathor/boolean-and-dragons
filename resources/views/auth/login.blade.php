@extends('layouts.app')

@section('content')
    <div id="login">
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
                document.getElementById('login-sound').volume = 0.4;
                document.querySelector('video').play();
            });
        </script>
        <div id="login-card" class="row justify-content-center position-absolute bg-*">
            <div class="bg-*">
                <form method="POST" class="text-white" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4 row">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 row">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
