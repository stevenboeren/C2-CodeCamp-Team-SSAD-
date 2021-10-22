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

    <div class="categories">
        <a href="" class="category-item category-large">
            <h2>Frisdranken</h2>
        </a>
        <a href="" class="category-item category-large">
            <h2>Warme Dranken</h2>   
        </a>    
    </div>


</div>
    

@endsection