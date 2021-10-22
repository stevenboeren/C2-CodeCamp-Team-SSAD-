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
        <h1>Boeken</h1>
        <p>Lekker een boek lezen, maar weet niet welke. Hier is een lijst met boeken</p>
    </div>
    
    <div class="selection">
        @foreach($books as $book)
        <div class="selection-item" style="background-image: url('img/boeken/{{$book->img_url}}')">
            <div class="item-text"><a href="/books/{{ $book->id }}">{{ $book->name }}</a></div>
        </div>
        @endforeach
    </div>

</div>
    

@endsection