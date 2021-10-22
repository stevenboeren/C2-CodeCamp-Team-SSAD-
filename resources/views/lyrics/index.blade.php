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

<div class="container selection">
    <div class="welcome-message">
        <h2>Songteksen</h2>
        <p>Hier vindt je songteksten van bekende liedjes!</p>
    </div>
    <div class="grid">
        <div class="grid-item" style="background-image: url('/img/songteksten/bohemianrhapsody.png')">
            <div class="item-text"><a href="">Bohemian Rhapsody - Queen</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/songteksten/killerqueen.jpg')">
            <div class="item-text"><a href="">Killer Queen - Queen</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/songteksten/wearethechampions.jpg')">
            <div class="item-text"><a href="">We are the champions - Queen</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/songteksten/madness.jpg')">
            <div class="item-text"><a href="">Madness - Muse</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/songteksten/uprisingmuse.jpg')">
            <div class="item-text"><a href="">Uprising - Muse</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/songteksten/pluginbaby.jpg')">
            <div class="item-text"><a href="">Plug in baby - Muse</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/songteksten/uprisingmybaby.jpg')">
            <div class="item-text"><a href="">Uprising - MyBaby</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/songteksten/transylvania.jpg')">
            <div class="item-text"><a href="">Transylvia - Iron Maiden</a></div>
        </div>
    </div>
</div>

@endsection