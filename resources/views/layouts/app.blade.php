<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Serve per collegare lo stile -->
    @vite('resources/js/app.js')
    <title>@yield('title')</title>

</head>

<body>
    
    
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')


</body>

</html>