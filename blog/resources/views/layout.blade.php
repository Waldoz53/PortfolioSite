<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Waleed Rawasia - Web Dev</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        <div class="main-nav flex">
                <h1><a href='/'>Waleed Rawasia</a></h1>
                <ul class='flex nav-links'>
                    <li><a href='/'>Home!</a></li>
                    <li><a href=''>My Work</a></li>
                    <li><a href=''>About</a></li>
                    <li><a href=''>Contact!</a></li>
                    {{-- <li><a href=''>Other Stuff</a></li> --}}
                </ul>
        </div>
        @yield('content')
        <footer class='main-footer flex'>
            <ul>
                <li><a href='/'>Home</a></li>
                <li><a href='https://github.com/Waldoz53' target="_blank">My Github!</a></li>
                <li><a href='/'>LinkedIn!</a></li>
                <li><a href='/'>Privacy Policy</a></li>
            </ul>
        </footer>
    </body>
</html>
