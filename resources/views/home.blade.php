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
   
  <div class="category-item">
      <h2><a href="/books" class="link">Boeken</a></h2>
  </div>
  <div class="category-item ">
      <h2><a href="/drinks" class="link">Dranken</a></h2>
  </div>  
  <div class="category-item">
      <h2><a href="/movies" class="link">Films</a></h2>   
  </div> 
  <div class="category-item category-large">
      <h2><a href="/tools" class="link">Gereedschappen</a></h2>
  </div>
  <div class="category-item category-large">
      <h2><a href="/lyrics" class="link">Songteksten</a></h2>
  </div>
        
</div>
    

@endsection