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
        <h1>Zagen</h1>
        <p>Vindt hier alle info over verschillende soorten zagen!</p>
    </div>
    
    <div class="selection">
        @foreach($saws as $saw)
        <a class="selection-item" style="background-image: url('img/gereedschappen/{{$saw->img_url}}')" href="/saws/{{ $saw->id }}">
            <span class="item-text">{{ $saw->name }}</span>
        </a>
        @endforeach
    </div>

</div>
    

@endsection