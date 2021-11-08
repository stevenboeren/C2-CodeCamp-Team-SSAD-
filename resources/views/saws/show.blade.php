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
			<h1>{{ $saw->name }}</h1>
			<p>{{ $saw->description }}</p>
		</div>

		<div class="page-content-right">
			<img src="../img/gereedschappen/{{ $saw->img_url }}" alt="" class="">
			<a href="{{ $saw->link_url }}"><button class="btn btn-buy-link">Bestel link</button></a>
		</div>
	</div>
	
</div>

@endsection
