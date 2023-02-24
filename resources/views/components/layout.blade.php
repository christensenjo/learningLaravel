<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/layoutStyles.css')}}">
    <title>Laravel Playlists</title>
</head>
<body>
    <header class="header">
        <a href="/">
            <img class="headerLogo" src="{{asset('images/logo.png')}}" alt="Laravel Playlists Logo" />
            <h1 class="title">Laravel Playlists</h1>
        </a>
        <ul class="authLinks">
            <li><a href="/register">Register</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </header>
    {{-- View Output --}}
    <main>
        {{ $slot }}
    </main>
    <footer>

    </footer>    
</body>
</html>