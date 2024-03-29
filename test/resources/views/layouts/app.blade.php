<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @yield('headerlink')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>@yield('style')</style>
</head>
<body>
    <div id="app" class="container">
        <header class="row m-0 w-100">
            @yield('headerMenu')
        </header>
        <div class="row m-0 w-100">
            @yield('content')
        </div>
        <footer class="row m-0 w-100">
            @yield('footer')
        </footer>
    </div>
</body>
</html>
