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

<?php if($lyrics->color) echo "<body class='$lyrics->color'>" ?>
<div class="container">
	<div class="page-content">
		<div class="page-content-left">
			<h1>{{ $lyrics->songname }}</h1>
			<!-- <p>{{ $lyrics->lyrics }}</p> -->
			<p>{!! nl2br(e($lyrics->lyrics)) !!}</p>
		</div>

		<div class="page-content-right">
			<img src="../img/songteksten/{{ $lyrics->img_url }}" alt="">
			<div class="more-info">
				<p><span>Artiest:</span>  {{ $lyrics->songartist }}</p>
				<p><span>Jaar:</span>  {{ $lyrics->year }}</p>
			</div>
		</div>
	</div>
	
</div>

@endsection
