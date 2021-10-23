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

<div class="contact">
    <iframe class="location" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=nl&amp;q=Koestraat%201%20in%20Den%20Bosch+(Mijn%20bedrijfsnaam)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
        <a href="https://www.mapsdirections.info/nl/cirkel-straal-kaart/">
            Cirkel op kaart Google
        </a>
    </iframe>
    <div>
        <div>
            <h2>Contact gegevens</h2>
            <br>
            <p>Koestraat 1</p>
            <p>5223 AG Den Bosh</p>
            <br>
            <div class="contact-info">
                <div class="contact-section">
                    <p>E-mail:&nbsp; info@mediaportal.com</p>
                    <p>Tel:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +31 6525 1566525</p>
                </div>
                <div class="contact-section social-links">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-skype"></a>
                </div>
            </div>
        </div>
        <div>
            <h2>Vraag of opmerking?</h2>
            <br>
            <form class="message-box" name="message" action="">
                <input name="usermsg" type="text" id="usermsg" placeholder="Typ je vraag of bericht..."/>
                <input name="submitmsg" type="submit" id="submitmsg" value="Start je gesprek" />
            </form>
        </div>
    </div>
</div>

@endsection