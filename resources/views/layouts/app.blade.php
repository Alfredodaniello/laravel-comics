<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC COMICS</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    
    <header class="d-flex align-items-center justify-content-between">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </div>
        <nav>
            <ul class="list-unstyled d-flex gap-3 text-uppercase">
                <li>
                    <a href="#">characters</a>
                </li>
                <li>
                    <a href="/comics">comics</a>
                </li>
                <li>
                    <a href="#">movie</a>
                </li>
                <li>
                    <a href="/tv">tv</a>
                </li>
                <li>
                    <a href="#">collectibles</a>
                </li>
                <li>
                    <a href="#">games</a>
                </li>
                <li>
                    <a href="#">video</a>
                </li>
                <li>
                    <a href="#">fans</a>
                </li>
                <li>
                    <a href="#">new</a>
                </li>
                <li>
                    <a href="#">shop</a>
                </li>

            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>