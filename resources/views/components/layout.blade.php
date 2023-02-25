<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/layoutStyles.css')}}">
    <title>Laravel Playlists</title>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    <x-flash-message />
    <div id="container">
        <header class="header">
            <a href="/">
                <img class="headerLogo" src="{{asset('images/logo.png')}}" alt="Laravel Playlists Logo" />
                <h1 class="title">Laravel Playlists</h1>
            </a>
            <div class="menuEnd">
                <button><a href="/register">Register</a></button>
                <button><a href="/login">Login</a></button>
            </div>
        </header>
        {{-- View Output --}}
        <main>
            {{ $slot }}
        </main>
        <footer>
    
        </footer>
    </div>  
</body>
</html>