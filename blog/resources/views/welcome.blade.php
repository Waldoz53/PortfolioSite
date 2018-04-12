@extends('layout')

@section('content')
<div class="home-content wrapper margin-top-30">
    <h1>Hello.</h1>
    <p>
        I'm Waleed. I'm a front end/web developer based in Calgary, Canada.
    </p>
    <p>
        I really like purple.
    </p>
    <p class='home-link margin-top-30 margin-bottom-30'><a href="https://github.com/Waldoz53" target='_blank'>My Github</a></p>

    <div class="bottom">
        <p>I was last listening to:</p>
        <p id='recentSong'></p>
        <img class='margin-top-30' src="" id="songAlbum" alt=''>
    </div>
</div>
@endsection
