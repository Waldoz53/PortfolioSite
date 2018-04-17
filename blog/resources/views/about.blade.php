@extends('layout')

@section('content')
<div class="about-content wrapper margin-top-30 margin-bottom-60 center-text">
    {{-- <img src="/img/myface.jpg" alt="it's me, waleed!" class='margin-bottom-30'> --}}
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
        <div class="card card-csharp">
            <p>C#</p>
        </div>
        <div class="card card-php">
            <p>PHP and Laravel</p>
        </div>
        <div class="card card-wp">
            <p>Wordpress</p>
        </div>
    </div>
    <p>Sprinkle in a little MySQL and Python.</p>
    <br><br>
    <p>My name is Waleed. I really, really like purple.</p>
    <br>
    <p>I like creating sites and web apps. I prefer simple design and ease over over-complication</p>
    <br>
    <p>I've lived in quite a few countries. </p>
    <br>
    <br>
    <br>
    <p class='margin-top-30 other-link'><a href="/stuff">Other Stuff</a></p>
</div>
@endsection
