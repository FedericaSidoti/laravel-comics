<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Serve per collegare lo stile -->
    @vite('resources/js/app.js')
    <title>Title</title>

</head>

<body>
    <h1>Prova</h1>

    <main class="container">
        @yield('content')
    </main>


</body>

</html>