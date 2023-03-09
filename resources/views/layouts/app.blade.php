<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>
<body>
    <div id="app">
        @if (!Auth::guest())
            @include('layouts.header')
        @endif
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('javascript')
    <script type="text/javascript" src="{{ asset('js/common/base.js') }}"></script>
    @yield('javascript-files')
</body>
</html>
