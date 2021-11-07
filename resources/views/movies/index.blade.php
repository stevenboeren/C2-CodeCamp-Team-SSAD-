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
        <a class="selection-item" style="background-image: url('/img/films/netflix.jpg')" href="https://www.netflix.com/browse">
            <span class="item-text">Netflix</span>
        </a>
    
        @foreach($moviesactors as $moviesactor)
        <a class="selection-item" style="background-image: url('img/films/{{$moviesactor->img_url}}')" href="/movies/{{ $moviesactor->id }}">
            <span class="item-text">{{ $moviesactor->fullname }}</span>
        </a>
        @endforeach
    </div>

</div>    

@endsection