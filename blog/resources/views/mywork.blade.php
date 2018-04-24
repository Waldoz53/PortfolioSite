@extends('layout')

@section('content')
    <h1 class='center-text margin-top-50'>My Work</h1>
    <p class='home-link center-text margin-top-30 margin-bottom-30'><a href="https://github.com/Waldoz53" target='_blank'>My Github</a></p>
<div class="my-work wrapper flex cards margin-top-30 margin-bottom-30 center-text">
    <div class="card">
        <p class='margin-bottom-10'>Laravel Pocket Imitation</p>
        <img src="/img/pocketimitation.jpg" alt="screenshot of my pocket imitation">
        <div class="flex flex-wrap margin-top-10">
            <p class='margin-bottom-10'><a href="http://getpocket.thewaleed.com/" target="_blank">Link</a></p>
            <p><a href="https://bitbucket.org/Waldoz53/wbdv-winter-2018-php-waleed-rawasia" target="_blank">Source</a></p>
        </div>
    </div>
    <div class="card">
        <p class='margin-bottom-10'>Angular Pocket Imitation</p>
        <img src="/img/pocketimitation.jpg" alt="a screenshot of my angular version of pocket">
        <div class="flex flex-wrap margin-top-10">
            <p class='margin-bottom-10'><a href="https://waleed-pocket-sygnfojbgy.now.sh/" target="_blank">Link</a></p>
            <p><a href="https://github.com/Waldoz53/angular-pocket" target="_blank">Source</a></p>
        </div>
    </div>
    <div class="card">
        <p class='margin-bottom-10'>Javascript Microwave</p>
        <img src="/img/microwave.png" alt="screenshot of a javascript microwave">
        <div class="flex flex-wrap margin-top-10">
            <p class='margin-bottom-10'><a href="https://s3.ca-central-1.amazonaws.com/js-assignment-2/microwave.html" target="_blank">Link</a></p>
            <p><a href="https://bitbucket.org/Waldoz53/assignment-2" target="_blank">Source</a></p>
        </div>
    </div>
    <div class="card">
        <p class='margin-bottom-10'>Last.fm User Lookup</p>
        <img src="/img/lastfmlookup.png" alt="screenshot of code from rock/paper/scissors">
        <div class="flex flex-wrap margin-top-10">
            <p class='margin-bottom-10'><a href="https://lastfmusercheck-vkjxhpgsfg.now.sh" target="_blank">Link</a></p>
            <p><a href="https://github.com/Waldoz53/LastFMUserCheck" target="_blank">Source</a></p>
        </div>
    </div>
    <div class="card">
        <p class='margin-bottom-10'>Javascript Super Simple Chat</p>
        <img src="/img/jschat.png" alt="a screenshot the simple chatroom">
        <div class="flex flex-wrap margin-top-10">
            <p class='margin-bottom-10'><a href="https://new-groove-qlaelxxujh.now.sh/" target="_blank">Link</a></p>
            <p><a href="https://github.com/Waldoz53/super-simple-js-chat" target="_blank">Source</a></p>
        </div>
    </div>
    <div class="card">
        <p class='margin-bottom-10'>This Site!</p>
        <img src="/img/portfoliohome.png" alt="a screenshot of some of my work">
        <div class="flex flex-wrap margin-top-10">
            <p class='margin-bottom-10'><a href="/" target="_blank">Link</a></p>
            <p><a href="https://github.com/Waldoz53/PortfolioSite" target="_blank">Source</a></p>
        </div>
    </div>
</div>
@endsection
