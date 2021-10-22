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
        <h2>Gereedschappen</h2>
        <p>Vindt hier alle info over verschillende gereedschappen!</p>
    </div>
    
    <div class="grid">
        <div class="grid-item" style="background-image: url('/img/gereedschappen/cirkelzaag.jpg')">
            <div class="item-text"><a href="">Cirkelzaag</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/gereedschappen/figuurzaag.jpg')">
            <div class="item-text"><a href="">Figuurzaag</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/gereedschappen/kettingzaag.jpg')">
            <div class="item-text"><a href="">Kettingzaag</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/gereedschappen/hamer.png')">
            <div class="item-text"><a href="">Hamer</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/gereedschappen/gatenzaag.jpg')">
            <div class="item-text"><a href="">Gatenzaag</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/gereedschappen/decoupeerzaag.jpg')">
            <div class="item-text"><a href="">Decoupeerzaag</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/gereedschappen/schroevendraaier.jpg')">
            <div class="item-text"><a href="">Schroevendraaier</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/gereedschappen/handzaag.jpg')">
            <div class="item-text"><a href="">Handzaag</a></div>
        </div>
    </div>

</div>
    

@endsection