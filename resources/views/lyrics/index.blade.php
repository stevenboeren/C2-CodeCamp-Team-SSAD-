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
        <h1>Songteksen</h1>
        <p>Hier vindt je songteksten van bekende liedjes!</p>
    </div>
    <div class="selection">
        @foreach($lyrics as $lyric)
        <a class="selection-item" style="background-image: url('img/songteksten/{{$lyric->img_url}}')" href="/lyrics/{{ $lyric->id }}">
            <span class="item-text">{{ $lyric->songname }}</span>
        </a>
        @endforeach
    </div>
</div>

@endsection