@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a> |
        <a href="/book">Boeken</a> |
        <a href="/drinks">Dranken</a> |
        <a href="/movies">Films</a> |
        <a href="/tools">Gereedschappen</a> |
        <a href="/lyrics">Songteksten</a>
    </nav>
@endsection

@section('content')

<div class="container selection">

    <div class="welcome-message">
        <h2>Films</h2>
        <p>Vindt hier alles over de bekenste films en nog meer info zoals acteurs.</p>
    </div>
    
    <div class="grid">
        <div class="grid-item" style="background-image: url('/img/films/movies.png')">
            <div class="item-text"><a href="https://www.movies.nl">Movies.nl</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/films/videoland.jpg')">
            <div class="item-text"><a href="https://www.videoland.com/nl/">Videoland</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/films/netflix.jpg')">
            <div class="item-text"><a href="https://www.netflix.com/browse">Netflix</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/films/imbd.png')">
            <div class="item-text"><a href="https://www.imdb.com">IMBD</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/films/jamesbond.jpg')">
            <div class="item-text"><a href="">James Bond(Roger Moore)</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/films/timothydalton.jpg')">
            <div class="item-text"><a href="">Timothy Dalton</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/films/darthvader.jpg')">
            <div class="item-text"><a href="">Darth Vader</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/films/lukeskywalker.png')">
            <div class="item-text"><a href="">Luke Skywalker</a></div>
        </div>
    </div>

</div>    

@endsection