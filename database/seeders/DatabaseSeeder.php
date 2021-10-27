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
    }
}
