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
        <a class="selection-item" style="background-image: url('/img/songteksten/bohemianrhapsody.png')" href="">
            <span class="item-text">Bohemian Rhapsody - Queen</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/songteksten/killerqueen.jpg')" href="">
            <span class="item-text">Killer Queen - Queen</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/songteksten/wearethechampions.jpg')" href="">
            <span class="item-text">We are the champions - Queen</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/songteksten/madness.jpg')" href="">
            <span class="item-text">Madness - Muse</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/songteksten/uprisingmuse.jpg')" href="">
            <span class="item-text">Uprising - Muse</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/songteksten/pluginbaby.jpg')" href="">
            <span class="item-text">Plug in baby - Muse</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/songteksten/uprisingmybaby.jpg')" href="">
            <span class="item-text">Uprising - MyBaby</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/songteksten/transylvania.jpg')" href="">
            <span class="item-text">Transylvia - Iron Maiden</span>
        </a>
    </div>
</div>

@endsection