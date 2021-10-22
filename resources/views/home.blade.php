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
  <h1>Welkom op mediaportal! </h1>
  <p>Hierop vindt je alle je favorieten media op een plek. </p>
</div>

<div class="categories">
   
    <a href="/books" class="category-item">
        <h2>Boeken</h2>
    </a>
    <a href="/drinks" class="category-item ">
        <h2>Dranken</h2>
    </a>
    <a href="/movies" class="category-item">
        <h2>Films</h2>   
    </a>
    <a href="/tools" class="category-item category-large">
        <h2>Gereedschappen</h2>
    </a>
    <a href="/lyrics" class="category-item category-large">
        <h2>Songteksten</h2>
    </a>
        
</div>
    

@endsection