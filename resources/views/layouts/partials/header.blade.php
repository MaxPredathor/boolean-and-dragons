<nav id="header">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class=" fst-italic">
            <h1>Boolck-Office Management</h1>
        </div>
        <ul class="navbar-nav ml-auto flex-row">
            <!-- Authentication Links -->
            @guest

            @if(Route::currentRouteName() != 'login')
            <li class="my-btn-hover my-btn d-flex  align-items-center justify-content-center">
                <a id="loginButton" class="text-white p-0 my-auto" href="{{ route('login') }}">{{
                    __('Login') }}</a>
            </li>
            @else
            <li class="my-btn-hover my-btn d-flex  align-items-center justify-content-center">
                <a id="loginButton" class="text-white p-0 my-auto" href="{{ route('home') }}">{{
                    __('Go back') }}</a>
            </li>
            @endif
            <!-- @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif -->
            @else
            <li id="user" class="nav-item dropdown">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="me-3 d-flex flex-column align-items-center justify-content-center">
                        <div class="my-user">
                            <i class="fa-solid fa-gamepad"></i>
                        </div>
                        <a id="navbarDropdown"
                            class="d-flex flex-column align-items-center justify-content-center nav-link  fs-6"
                            href="{{ route('admin.dashboard') }}">

                            {{ __('Game') }}
                        </a>
                    </div>
                    <div class="me-3 d-flex flex-column align-items-center justify-content-center">
                        <div class="my-user">
                            <i class="fa-solid fa-home"></i>
                        </div>
                        <a id="navbarDropdown"
                            class="d-flex flex-column align-items-center justify-content-center nav-link  fs-6"
                            href="{{ route('admin.dashboard') }}">

                            {{ __('Home') }}
                        </a>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <div class="my-user">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <a id="navbarDropdown"
                            class="d-flex flex-column align-items-center justify-content-center nav-link fs-6" href="#"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('admin') }}">{{ __('Dashboard') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>