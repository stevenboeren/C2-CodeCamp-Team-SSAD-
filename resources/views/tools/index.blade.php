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
        <h1>Gereedschappen</h1>
        <p>Vindt hier alle info over verschillende gereedschappen!</p>
    </div>
    
    <div class="selection">
        @foreach($tools as $tool)
        <a class="selection-item" style="background-image: url('img/gereedschappen/{{$tool->img_url}}')" href="/tools/{{ $tool->id }}">
            <span class="item-text">{{ $tool->name }}</span>
        </a>
        @endforeach
    </div>

</div>
    

@endsection