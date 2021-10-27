<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Boeken 
        $book = new \App\Models\Book();
        $book->name = "Zuurstofschuld";
        $book->actor = "Toine Heijmans";
        $book->description = "De 19-jarige Walter Welzenbach is net begonnen met zijn studie wiskunde als hij de iets oudere Lenny Tichy ontmoet, een lange jongen met een knalrode hanenkam die bezig is een brugpijler te beklimmen. Dat is het begin van Walters inwijding in de klimsport. De twee worden (klimvrienden) samen bouwen ze een bestaan op dat helemaal bepaald wordt door het alpinisme, eerst in de Franse Alpen, later in de Himalaya.";
        $book->img_url = "zuurstofschuld.jpeg";
        $book->pages = 336;
        $book->save();

        $book = new \App\Models\Book();
        $book->name = "Klifi";
        $book->actor = "Adriaan van Dis";
        $book->description = "Het is 2030. Nederland is inmiddels een republiek. Het land wordt geleid door een president, die regeert via Twitter (al zijn uitspraken worden afgedrukt in rode hoofdletters) en die in allerlei opzichten doet denken aan Thierry Baudet. Het is maar een milde herfststorm, relativeert hij, als het land voor het eerst in de geschiedenis wordt getroffen door een verwoestende orkaan.";
        $book->img_url = "klifi.jpeg";
        $book->pages = 208;
        $book->save();

        $book = new \App\Models\Book();
        $book->name = "Amir";
        $book->actor = "Rein van der Wiel";
        $book->description = "De twaalfjarige Amir moet voor school een dagboek bijhouden en opschrijven hoe hij over zichzelf en de mensen om hem heen denkt. Amir woont met zijn Nederlandse moeder in Amsterdam en gaat op zoek naar zijn verdwenen vader, een Afghaanse vluchteling.";
        $book->img_url = "amir.jpeg";
        $book->pages = 184;
        $book->save();

        $book = new \App\Models\Book();
        $book->name = "Alles is Weg";
        $book->actor = "Anke Kranendonk";
        $book->description = "Fae groeit op in Baarn, een dorp aan een rivier. Ze heeft veel vrienden met wie ze dagelijks omgaat. Het middelpunt van deze vriendengroep is Muis, een kleine, vrolijke en ondeugende jongen met een hart van goud. Hij is altijd in voor geintje, zoals het saboteren van de bewaakte spoorwegovergang of het versieren van veel oudere, mooie meisjes. Op een onbezorgde, zomerse dag wordt alles in één keer anders: Muis krijgt een fataal ongeluk en overlijdt.";
        $book->img_url = "alles-is-weg.jpeg";
        $book->pages = 184;
        $book->save();


        // Dranken
        $drink = new \App\Models\Drink();
        $drink->name = "Thee";
        $drink->description = "Thee is een warme drank die wordt gemaakt door infusie van de gedroogde bladeren van de theeplant Camellia sinensis. Alle als thee verkochte producten die niet van deze plant afkomstig zijn (bijvoorbeeld kamillethee of rooibos), zijn dan ook geen echte thee maar kruidenthee.";
        $drink->img_url = "thee.jpg";
        $drink->hot = 1;
        $drink->save();

        $drink = new \App\Models\Drink();
        $drink->name = "Koffie";
        $drink->description = "Koffie is een meestal warm genuttigde drank, die wordt bereid op basis van water en gedroogde en gebrande pitten van de koffieplant (Coffea spp.) die vanwege hun vorm koffiebonen worden genoemd. Koffie bevat het stimulerende middel cafeïne.";
        $drink->img_url = "koffie.jpeg";
        $drink->hot = 1;
        $drink->save();
        
        $drink = new \App\Models\Drink();
        $drink->name = "Latte macchiato";
        $drink->description = "Een latte macchiato is een koffiedrank die bestaat uit laagjes van melk en espresso. Latte betekent melk en macchiato staat voor gevlekt. Wat er ontstaat als er op de juiste wijze espresso aan de latte wordt toegevoegd is een vlek in de melk. ";
        $drink->img_url = "latte.jpg";
        $drink->hot = 1;
        $drink->save();

        $drink = new \App\Models\Drink();
        $drink->name = "Cola";
        $drink->description = "Cola is een koolzuurhoudende frisdrank. Het smaakt zoet (maar is qua pH zuur) en bevat circa 28-32 mg cafeïne per 33 cl. Andere belangrijke ingrediënten zijn vanille, kaneel, karamel en citroen. Anders dan de meeste frisdranken bevat het geen citroenzuur, maar fosforzuur.";
        $drink->img_url = "cola.jpg";
        $drink->hot = 0;
        $drink->save();

        $drink = new \App\Models\Drink();
        $drink->name = "7Up";
        $drink->description = "7Up of Sevenup is een bruisende drank (prik door koolzuur) die van smaak lijkt op Sprite. 7up wordt verkocht in een groene, plastic fles. Het heeft een lemon-lime (citroen-limoen) smaak en is doorzichtig. ";
        $drink->img_url = "sevenup.jpg";
        $drink->hot = 0;
        $drink->save();

        $drink = new \App\Models\Drink();
        $drink->name = "Sinas";
        $drink->description = "Sinas is in Nederland de benaming voor de doorgaans gele of oranje, meestal koolzuurhoudende frisdrank met sinaasappelsmaak. Zoals de meeste frisdranken bevat sinas veel suiker of in de light-versie kunstmatige zoetstoffen. ";
        $drink->img_url = "sinas.jpg";
        $drink->hot = 0;
        $drink->save();


        // Films voor bij acteur Roger Moore
        $movie = new \App\Models\Movie();
        $movie->name = "Live and Let Die";
        $movie->actor = "Roger Moore";
        $movie->year = 1973;
        $movie->img_url = "liveandletdie.jpg";
        $movie->link_url = "https://www.amazon.com/gp/product/B001AQT0WW/ref=as_li_tf_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B001AQT0WW&linkCode=as2&tag=wpress-20";
        $movie->save();

        $movie = new \App\Models\Movie();
        $movie->name = "The Man with the Golden Gun";
        $movie->actor = "Roger Moore";
        $movie->year = 1974;
        $movie->img_url = "themanwiththegoldengun.jpg";
        $movie->link_url = "https://www.amazon.com/gp/product/B001U6YI9W/ref=as_li_tf_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B001U6YI9W&linkCode=as2&tag=wpress-20";
        $movie->save();

        $movie = new \App\Models\Movie();
        $movie->name = "The Spy Who Loved Me";
        $movie->actor = "Roger Moore";
        $movie->year = 1977;
        $movie->img_url = "thespywholovedme.jpg";
        $movie->link_url = "https://www.amazon.com/gp/product/B009MO4FTM/ref=as_li_tf_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B009MO4FTM&linkCode=as2&tag=wpress-20";
        $movie->save();

        $movie = new \App\Models\Movie();
        $movie->name = "Moonraker";
        $movie->actor = "Roger Moore";
        $movie->year = 1979;
        $movie->img_url = "moonraker.jpg";
        $movie->link_url = "https://www.amazon.com/gp/product/B001PO686K/ref=as_li_tf_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B001PO686K&linkCode=as2&tag=wpress-20";
        $movie->save();

        $movie = new \App\Models\Movie();
        $movie->name = "A View to a Kill";
        $movie->actor = "Roger Moore";
        $movie->year = 1985;
        $movie->img_url = "aviewtoakill1985.jpg";
        $movie->link_url = "https://www.amazon.com/gp/product/B009L6VWRO/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B009L6VWRO&linkCode=as2&tag=wpress-20&linkId=ZJSYQJLEQNHJ26RQ";
        $movie->save();


        // Flims Acteurs
        $movieactor = new \App\Models\MoviesActor();
        $movieactor->fullname = "James Bond (Roger Moore)";
        $movieactor->description = "Sir Roger George Moore was een Britse acteur die vooral bekend werd door zijn rollen in de series Ivanhoe, The Saint en The Persuaders. Verder speelde hij de rol van geheim agent James Bond.";
        $movieactor->img_url = "jamesbond.jpg";
        $movieactor->save();

        $movieactor = new \App\Models\MoviesActor();
        $movieactor->fullname = "Darth Vader (David Prowse)";
        $movieactor->description = "Darth Vader is een personage uit de Star Wars-films. Hij is als Sith-leerling ondergeschikt aan keizer Palpatine, ook bekend als Darth Sidious. In de jaren 1977, 1980 en 1983 werd Darth Vader gespeeld door acteur David Prowse en stuntman Bob Anderson. Zijn stem werd echter ingesproken door James Earl Jones, omdat diens stem veel zwaarder, duisterder en dreigender klonk.";
        $movieactor->img_url = "darthvader.jpg";
        $movieactor->save();

        $movieactor = new \App\Models\MoviesActor();
        $movieactor->fullname = "Luke Skywalker (Mark Hamill)";
        $movieactor->description = "Luke Skywalker is een personage uit de Star Warssaga, gespeeld door acteur Mark Hamill. Luke is de tweelingbroer van prinses Leia. Hun ouders zijn Padmé Amidala en Anakin Skywalker. Skywalker werd opgevoed door zijn oom Owen Lars en tante Beru Whitesun Lars.";
        $movieactor->img_url = "lukeskywalker.png";
        $movieactor->save();

        $movieactor = new \App\Models\MoviesActor();
        $movieactor->fullname = "Timothy Dalton";
        $movieactor->description = "Dalton groeide op in Manchester. Nadat hij zijn school had afgemaakt, ging hij naar het National Youth Theatre. Hij studeerde twee jaar lang aan de Royal Academy of Dramatic Art. In 1966 ging hij naar het Birmingham Repertory Theatre, waar hij hoofdrollen speelde.";
        $movieactor->img_url = "timothydalton.jpg";
        $movieactor->save();


    }
}
