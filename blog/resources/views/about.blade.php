@extends('layout')

@section('content')
<div class="about-content wrapper margin-top-30 margin-bottom-60 center-text">
    <h1>About Me</h1>
    <br>
    <p>My skills:</p>
    <br>
    <div class="cards flex margin-bottom-30">
        <div class="card card-js">
            <h3>Javascript</h3>
        </div>
        <div class="card card-angular">
            <h3>Angular</h3>
        </div>
        <div class="card card-html">
            <h3>HTML/CSS</h3>
        </div>
        <div class="card card-wp">
            <p>Wordpress</p>
        </div>
        <div class="card card-csharp">
            <p>C#</p>
        </div>
        <div class="card card-php">
            <p>PHP and Laravel</p>
        </div>
    </div>
    <div class="">
        <p>Sprinkle in a little MySQL and Python.</p>
        <br><br>
        <p>My name is Waleed. I really, really like purple.</p>
        <br>
        <p>I like creating sites and web apps. I prefer simple design and ease over over-complication</p>
        <br>
        <p>I've lived in quite a few countries, but lived mostly in Saudi Arabia. </p>
        <br>
        <br>
        <p class='home-link'><a href='https://imgur.com/a/9NHHb' target="_blank">Photos from Saudi</a></p>
        <br><br>
        <p>Other Stuff I'm on:</p>
    </div>
    <div class="links wrapper flex flex-wrap">
        <a href='https://bitbucket.org/Waldoz53/' target="_blank"><i class="fab fa-bitbucket fa-2x"></i></a>
        <a href='https://soundcloud.com/sludgebomb53' target="_blank"><i class="fab fa-soundcloud fa-2x"></i></a>
        <a href='https://twitter.com/Waldoz53' target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
        <a href='https://www.twitch.tv/waldoz53' target="_blank"><i class="fab fa-twitch fa-2x"></i></a>
        <a href='https://www.youtube.com/user/Waldoz53' target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
        <a href='https://steamcommunity.com/id/waldoz' target="_blank"><i class="fab fa-steam-square fa-2x"></i></a>
    </div>
</div>
@endsection
