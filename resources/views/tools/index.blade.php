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
        <h1>Gereedschappen</h1>
        <p>Vindt hier alle info over verschillende gereedschappen!</p>
    </div>
    
    <div class="selection">
        <a class="selection-item" style="background-image: url('/img/gereedschappen/cirkelzaag.jpg')" href="">
            <span class="item-text">Cirkelzaag</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/gereedschappen/figuurzaag.jpg')" href="">
            <span class="item-text">Figuurzaag</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/gereedschappen/kettingzaag.jpg')" href="">
            <span class="item-text">Kettingzaag</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/gereedschappen/hamer.png')" href="">
            <span class="item-text">Hamer</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/gereedschappen/gatenzaag.jpg')" href="">
            <span class="item-text">Gatenzaag</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/gereedschappen/decoupeerzaag.jpg')" href="">
            <span class="item-text">Decoupeerzaag</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/gereedschappen/schroevendraaier.jpg')" href="">
            <span class="item-text">Schroevendraaier</span>
        </a>
        <a class="selection-item" style="background-image: url('/img/gereedschappen/handzaag.jpg')" href="">
            <span class="item-text">Handzaag</span>
        </a>
    </div>

</div>
    

@endsection