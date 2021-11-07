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

<body class="purple">
<div class="container">

    @foreach($drinks as $drink)
    <div class="page-content">
		<div class="page-content-left">
			<h1>{{ $drink->name }}</h1>
			<p>{{ $drink->description }}</p>
            <?php if($drink->name == "Koffie") echo "<a href='/movies/5' class='button'>Ga naar George Clooney</a>" ?>
		</div>

		<div class="page-content-right">
			<img src="../img/dranken/warmedranken/{{ $drink->img_url }}" alt="">
		</div>
	</div>
    @endforeach

</div>


@endsection
