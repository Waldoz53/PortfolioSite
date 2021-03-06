<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Waleed Rawasia - Front End Dev</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        <div class="main-nav flex padding-top-20">
                <h1><a href='/'>Waleed</a></h1>
                <ul class='flex nav-links'>
                    <li><a href='/mywork'>Portfolio</a></li>
                    <li><a href='/about'>About</a></li>
                    <li><a href='/contact'>Contact!</a></li>
                </ul>
        </div>
        <div class="mobile-header flex">
            <h1><a href='/'>Waleed</a></h1>
            <a><i class="fas fa-bars fa-3x" id='mobileBars'></i></a>
        </div>
        <div class="mobile-menu" id='mobileMenu'>
            <ul>
                <li><a href='/mywork'>Portfolio</a></li>
                <li><a href='/about'>About</a></li>
                <li><a href='/contact'>Contact!</a></li>
            </ul>
        </div>
        @yield('content')
        <footer class='main-footer flex'>
            <ul>
                <li><a href='/privacypolicy'>Privacy Policy</a></li>
            </ul>
        </footer>
        <footer class='mobile-footer'>
            <ul>
                <li><a href='/privacypolicy'>Privacy Policy</a></li>
            </ul>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
