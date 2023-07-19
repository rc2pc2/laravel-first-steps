<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel Primi Passi' )</title>
    {{-- import css --}}
    @yield('custom-css')
</head>
<body>
    @include('partials.header')

    <main>
        @yield('main-content')
    </main>

    @include('partials.footer')

    {{-- import js --}}
    @vite('resources/js/app.js')
    @yield('custom-js')
</body>
</html>