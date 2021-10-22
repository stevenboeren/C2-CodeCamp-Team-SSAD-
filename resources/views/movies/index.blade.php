@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a> |
        <a href="/books">Boeken</a> |
        <a href="/drinks">Dranken</a> |
        <a href="/movies">Films</a> |
        <a href="/tools">Gereedschappen</a> |
        <a href="/lyrics">Songteksten</a>
    </nav>
@endsection

@section('content')

<div class="container">

    <div class="welcome-text">
        <h1>Films</h1>
        <p>Vindt hier alles over de bekenste films en nog meer info zoals acteurs.</p>
    </div>
    
    <div class="selection">
        <a class="selection-item" style="background-image: url('/img/films/movies.png')" href="https://www.movies.nl">
            <span class="item-text">Movies.nl</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/films/videoland.jpg')" href="https://www.videoland.com/nl/">
            <span class="item-text">Videoland</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/films/netflix.jpg')" href="https://www.netflix.com/browse">
            <span class="item-text">Netflix</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/films/imbd.png')" href="https://www.imdb.com">
            <span class="item-text">IMBD</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/films/jamesbond.jpg')" href="">
            <span class="item-text">James Bond(Roger Moore)</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/films/timothydalton.jpg')" href="">
            <span class="item-text">Timothy Dalton</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/films/darthvader.jpg')" href="">
            <span class="item-text">Darth Vader</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/films/lukeskywalker.png')" href="">
            <span class="item-text">Luke Skywalker</span>
        </a>
    </div>

</div>    

@endsection