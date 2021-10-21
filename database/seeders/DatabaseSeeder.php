<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Book;

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
    }
}
