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
            <a href="{{ route('main.apropos') }}">A Propos</a>
        </nav>
    </header>
    <div class="debut"></div>
    @yield('content')
    <footer>
        <div class="footer">
            <h2 class="ft1"><a href="{{ route('main.menu') }}">Menu</a></h2>
            <h2><a href="{{ route('main.home') }}">Accueil</a></h2>
            <h2><a href="{{ route('main.reservation') }}">Réservation</a></h2>
            <h2><a href="{{ route('main.mention') }}">Mentions légales</a></h2>
            <h2><a href="{{ route('main.apropos') }}">A Propos</a></h2>
        </div>
        <div class="reseau">
            <h2>Nos réseau :</h2>
            <a href="#"><img src="images/insta.jpeg" alt=""></a>
            <a href="#"><img src="images/Linkdin.png" alt=""></a>
            <a href="#"><img src="images/facebook.jpeg" alt=""></a>
            <a href="#"><img src="images/tiktok.png" alt=""></a>
        </div>
    </footer>
</body>
</html>