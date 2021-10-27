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
	<div class="page-content">
		<div class="page-content-left">
			<h1>{{ $moviesactor->fullname }}</h1>
			<p>{{ $moviesactor->description }}</p>
		</div>
		<div class="page-content-right">
			<img src="../img/films/{{ $moviesactor->img_url }}" alt="">
		</div>

		
	</div>
	@if ($moviesactor->fullname === "James Bond (Roger Moore)")
		<h1>Hier is een lijst van James Bond-Films!</h1>
		<div class="selection">
			@foreach($movies as $movie)
				<a class="selection-item" style="background-image: url('../img/films/{{$movie->img_url}}')" href="{{ $movie->link_url }}">
					<span class="item-text">{{ $movie->name }} ({{ $movie->year }})</span>
				</a>
			@endforeach
		</div>
	@endif
</div>

@endsection
