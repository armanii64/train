<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('event.index') }}">
                                <i class="fa fa-list"></i> {{ __('app.rollingStock.labels.events') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('locomotive.index') }}">
                                <i class="fa fa-subway"></i> Lokomotywy
                            </a>
                            <a class="dropdown-item" href="{{ route('passenger.index') }}">
                                <i class="fa fa-train"></i> Wagony osobowe
                            </a>
                            <a class="dropdown-item" href="{{ route('freight.index') }}">
                                <i class="fa fa-train"></i> Wagony towarowe
                            </a>
                            <a class="dropdown-item" href="{{ route('composition.index') }}">
                                <i class="fa fa-list-alt"></i> Składy
                            </a>
                            @if (Auth::user()->is_admin)
                                <a class="dropdown-item" href="{{ route('composition.index-for-events') }}">
                                    <i class="fa fa-list-alt"></i> Składy na imprezę
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> Wyloguj
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
