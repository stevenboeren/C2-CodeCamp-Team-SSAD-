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
        <h1>Dranken</h1>
        <p>Hierop vindt je alle je favorieten onderwerpen over Dranken. </p>
    </div>

    <div class="selection">
        <div class="selection-item">
            <i class="fas fa-tools"></i>
            <h2><a href="" class="link">Frisdranken</a></h2>
        </div>
        <div class="selection-item">
            <h2><a href="" class="link">Warme Dranken</a></h2>   
        </div>      
    </div>


</div>
    

@endsection