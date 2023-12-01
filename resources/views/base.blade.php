<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('main.home') }}">Accueil</a>
            <a href="{{ route('main.menu') }}">Menu</a>
            <a href="{{ route('main.reservation') }}">Réservation</a>
            <a href="{{ route('main.a-propos') }}">A Propos</a>
        </nav>
    </header>
    @yield('content')
    <footer>
        <!-- TODO -->
    </footer>
</body>
</html>