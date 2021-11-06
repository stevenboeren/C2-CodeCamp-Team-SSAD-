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
        $movieactor->color = "yellow";
        $movieactor->save();

        $movieactor = new \App\Models\MoviesActor();
        $movieactor->fullname = "Luke Skywalker (Mark Hamill)";
        $movieactor->description = "Luke Skywalker is een personage uit de Star Warssaga, gespeeld door acteur Mark Hamill. Luke is de tweelingbroer van prinses Leia. Hun ouders zijn Padmé Amidala en Anakin Skywalker. Skywalker werd opgevoed door zijn oom Owen Lars en tante Beru Whitesun Lars.";
        $movieactor->img_url = "lukeskywalker.png";
        $movieactor->color = "green";
        $movieactor->save();

        $movieactor = new \App\Models\MoviesActor();
        $movieactor->fullname = "Timothy Dalton";
        $movieactor->description = "Dalton groeide op in Manchester. Nadat hij zijn school had afgemaakt, ging hij naar het National Youth Theatre. Hij studeerde twee jaar lang aan de Royal Academy of Dramatic Art. In 1966 ging hij naar het Birmingham Repertory Theatre, waar hij hoofdrollen speelde.";
        $movieactor->img_url = "timothydalton.jpg";
        $movieactor->color = "green";
        $movieactor->save();

        $movieactor = new \App\Models\MoviesActor();
        $movieactor->fullname = "George Clooney";
        $movieactor->description = "George Timothy Clooney (Lexington, Kentucky, 6 mei 1961) is een Amerikaans acteur, regisseur, scenarioschrijver en producent met meer dan dertig filmprijzen en nominaties op zijn naam. Voor de film Syriana won hij een Oscar voor beste mannelijke bijrol. Tevens won hij als producent een Oscar voor beste film voor Argo.";
        $movieactor->img_url = "georgeclooney.jpg";
        $movieactor->color = "";
        $movieactor->save();

        // Gereedschappen
        $tool = new \App\Models\Tool();
        $tool->name = "Cirkelzaag";
        $tool->description = "Een cirkelzaag voor non-ferromaterialen wordt meestal gebruikt om hout mee te zagen. Op de tanden van de zaag wordt een stukje snelstaal gesoldeerd, waardoor de slijtage sterk afneemt. De belangrijkste veiligheidsvoorzieningen zijn het spouwmes en de kap.";
        $tool->img_url = "cirkelzaag.jpg";
        $tool->link_url = "https://www.hornbach.nl/shop/MAKITA-Handcirkelzaag-HS7601J/5810698/artikel.html";
        $tool->save();

        $tool = new \App\Models\Tool();
        $tool->name = "Decoupeerzaag";
        $tool->description = "Een decoupeerzaag is een kort zaagblad (5 à 10 cm lang, circa 1 cm breed) dat door middel van de elektromotor in een decoupeerzaagmachine op en neer bewogen wordt. De machine inclusief het zaagje wordt eveneens decoupeerzaag of ook wel wipzaag genoemd.";
        $tool->img_url = "decoupeerzaag.jpg";
        $tool->link_url = "https://www.hornbach.nl/shop/BOSCH-Decoupeerzaag-PST-900-PEL/8115897/artikel.html";
        $tool->save();

        $tool = new \App\Models\Tool();
        $tool->name = "Figuurzaag";
        $tool->description = "Een figuurzaag is een stuk gereedschap waarmee plaatmateriaal en werkstukken van geringe omvang nauwkeurig kunnen worden gezaagd. Er zijn figuurzaagjes die uitsluitend geschikt zijn voor houten en kunststoffen voorwerpen en hiermee kunnen voorwerpen tot enkele millimeters dik worden gezaagd.";
        $tool->img_url = "figuurzaag.jpg";
        $tool->link_url = "https://www.hornbach.nl/shop/ATIKA-Figuurzaagmachine-DKV-400-2/6254153/artikel.html";
        $tool->save();

        $tool = new \App\Models\Tool();
        $tool->name = "Gatenzaag";
        $tool->description = "Een gatenzaag (ook wel een gatzaag of klokboor genoemd) is een hulpmiddel om grote gaten te maken, groter dan met een boor mogelijk is. Terwijl een boor alle materiaal uit het gat verspaant tot zaagsel, laat de gatenzaag een ronde schijf achter, met in het midden een gat.";
        $tool->img_url = "gatenzaag.jpg";
        $tool->link_url = "https://www.hornbach.nl/shop/WOLFCRAFT-Gatzaagset-bi-metaal-25-68-mm-6-delig/3709475/artikel.html";
        $tool->save();

        $tool = new \App\Models\Tool();
        $tool->name = "Hamer";
        $tool->description = "Een hamer is een klop- of slagwerktuig. Een hamer bestaat uit een steel, het handvat, met aan het eind de zogenaamde hamerkop. Een metalen hamerkop van 50-300 gram op een houten steel van ca. 30 cm lang die onder meer wordt gebruikt om spijkers (draadnagels) in houten voorwerpen te slaan.";
        $tool->img_url = "hamer.png";
        $tool->link_url = "https://www.hornbach.nl/shop/STANLEY-FATMAX-Klauwhamer-AntiVibe-450-gr/5658125/artikel.html";
        $tool->save();

        $tool = new \App\Models\Tool();
        $tool->name = "Handzaag";
        $tool->description = "Een handzaag is een zaag met een taps toelopend, veerkrachtig stalen zaagblad dat voorzien is van een handvat. Het blad is ongeveer 1 mm dik, 400 à 500 mm lang, en circa 100 mm breed.";
        $tool->img_url = "handzaag.jpg";
        $tool->link_url = "https://www.hornbach.nl/shop/Handzaag-350-mm/5136687/artikel.html";
        $tool->save();

        $tool = new \App\Models\Tool();
        $tool->name = "Kettingzaag";
        $tool->description = "Een kettingzaag (ook motorzaag, motorkettingzaag of boomzaag genoemd) is een draagbare machine om mee te zagen. De belangrijkste functie is hout zagen. Een kettingzaag is onnauwkeurig en levert een vrij brede en rafelige zaagsnede op, maar is door zijn handzaamheid en lange zaagblad uitermate geschikt om gehele bomen om te zagen of tot brandhout te verwerken.";
        $tool->img_url = "kettingzaag.jpg";
        $tool->link_url = "https://www.hornbach.nl/shop/MAKITA-Benzine-kettingzaag-2-takt-EA3201S35A-35-cm/6808056/artikel.html";
        $tool->save();

        $tool = new \App\Models\Tool();
        $tool->name = "Schroevendraaier";
        $tool->description = "Een schroevendraaier is een stuk gereedschap waarmee schroeven worden aangebracht en verwijderd. Het bestaat uit een handvat met een metalen steel waarvan het uiteinde zo gevormd is dat het in de kop van een schroef past.";
        $tool->img_url = "schroevendraaier.jpg";
        $tool->link_url = "https://www.hornbach.nl/shop/WITTE-Schroevendraaierset-VDE-Pro-6-delig/6165808/artikel.html";
        $tool->save();

        $lyric = new \App\Models\Lyric();
        $lyric->songname = "Bohemian Rhapsody";
        $lyric->songartist = "Queen";
        $lyric->lyrics = "Is this the real life?
        Is this just fantasy?
        Caught in a landside,
        No escape from reality
        Open your eyes,
        Look up to the skies and see,
        I'm just a poor boy, I need no sympathy,
        Because I'm easy come, easy go,
        Little high, little low,
        Any way the wind blows doesn't really matter to
        Me, to me
        Mamaaa,
        Just killed a man,
        Put a gun against his head, pulled my trigger,
        Now he's dead
        Mamaaa, life had just begun,
        But now I've gone and thrown it all away
        Mama, oooh,
        Didn't mean to make you cry,
        If I'm not back again this time tomorrow,
        Carry on, carry on as if nothing really matters
        Too late, my time has come,
        Sends shivers down my spine, body's aching all
        The time
        Goodbye, everybody, I've got to go,
        Gotta leave you all behind and face the truth
        Mama, oooh
        I don't want to die,
        I sometimes wish I'd never been born at all.
        I see a little silhouetto of a man,
        Scaramouch, Scaramouch, will you do the Fandango!
        Thunderbolts and lightning, very, very frightening me
        Galileo, Galileo
        Galileo, Galileo
        Galileo, Figaro - magnificoo
        I'm just a poor boy nobody loves me
        He's just a poor boy from a poor family,
        Spare him his life from this monstrosity
        Easy come, easy go, will you let me go
        Bismillah! No, we will not let you go
        (Let him go!) Bismillah! We will not let you go
        (Let him go!) Bismillah! We will not let you go
        (Let me go) Will not let you go
        (Let me go)(Never) Never let you go
        (Let me go) (Never) let you go (Let me go) Ah
        No, no, no, no, no, no, no
        Oh mama mia, mama mia, mama mia, let me go
        Beelzebub has a devil put aside for me, for me,
        For meee
        So you think you can stop me and spit in my eye
        So you think you can love me and leave me to die
        Oh, baby, can't do this to me, baby,
        Just gotta get out, just gotta get right outta here
        Nothing really matters, Anyone can see,
        Nothing really matters,
        Nothing really matters to me
        Any way the wind blows...";
        $lyric->year = 1975;
        $lyric->color = "blue";
        $lyric->img_url = "bohemianrhapsody.png";
        $lyric->save();

        $lyric = new \App\Models\Lyric();
        $lyric->songname = "Killer Queen";
        $lyric->songartist = "Queen";
        $lyric->lyrics = "She keeps her Moet et Chandon
        In her pretty cabinet
        'Let them eat cake', she says
        Just like Marie Antoinette
        A built-in remedy
        For Khrushchev and Kennedy
        At anytime an invitation
        You can't decline
        Caviar and cigarettes
        Well versed in etiquette
        Extraordinarily nice
        She's a Killer Queen
        Gunpowder, gelatine
        Dynamite with a laser beam
        Guaranteed to blow your mind
        Anytime
        Recommended at the price
        Insatiable an appetite
        Wanna try?
        To avoid complications
        She never kept the same address
        In conversation
        She spoke just like a baroness
        Met a man from China
        Went down to Geisha Minah
        Then again incidentally
        If you're that way inclined
        Perfume came naturally from Paris (naturally)
        For cars she couldn't care less
        Fastidious and precise
        She's a Killer Queen
        Gunpowder, gelatine
        Dynamite with a laser beam
        Guaranteed to blow your mind
        Anytime
        Drop of a hat she's as willing as
        Playful as a pussy cat
        Then momentarily out of action
        Temporarily out of gas
        To absolutely drive you wild, wild
        She's all out to get you
        She's a Killer Queen
        Gunpowder, gelatine
        Dynamite with a laser beam
        Guaranteed to blow your mind
        Anytime
        Recommended at the price
        Insatiable an appetite
        Wanna try?
        You wanna try";
        $lyric->year = 1974;
        $lyric->color = "blue";
        $lyric->img_url = "killerqueen.jpg";
        $lyric->save();


        $lyric = new \App\Models\Lyric();
        $lyric->songname = "Uprising";
        $lyric->songartist = "My Baby";
        $lyric->lyrics = "Allow me in your tub
        Just allow me in your club
        Allow me to drink from your cup
        I'll be coming back for more
        Allow me in your dream
        Allow me in your scene
        Just allow me on your knees
        I'll be coming back for more
        Sisters, keep on rising
        Brothers, keep on rising
        This girl keeps on rising
        Keep on rising up
        All I Believe in your school
        I Believe in your rules
        I Believe in your truth
        I'll be coming back for more
        I Believe in your land
        I Believe in that man
        I Believe in your command
        I'll be coming back for more
        Sisters, Brothers, Lovers
        Keep on rising up
        Sisters, keep on rising
        Brothers, keep on rising
        This girl keeps on rising
        Keep on rising up
        Uprising, uprising
        Uprising, uprising
        Sisters, Brothers, Lovers
        This girl keep on rising up
        Sisters, keep on rising
        Brothers, keep on rising
        This girl keeps on rising
        Keep on rising up";
        $lyric->year = 2015;
        $lyric->color = "green";
        $lyric->img_url = "uprisingmybaby.jpg";
        $lyric->save();

        $lyric = new \App\Models\Lyric();
        $lyric->songname = "Uprising";
        $lyric->songartist = "Muse";
        $lyric->lyrics = "Paranoia is in bloom
        The PR transmissions will resume
        They'll try to push drugs that keep us all dumbed down
        And hope that we will never see the truth around
        (So come on)
        Another promise, another scene
        Another packaged lie to keep us trapped in greed
        And all the green belts wrapped around our minds
        And endless red tape to keep the truth confined
        (So come on)
        They will not force us
        They will stop degrading us
        They will not control us
        We will be victorious
        (So come on)
        Interchanging mind control
        Come, let the revolution take its toll
        If you could flick the switch and open your third eye
        You'd see that we should never be afraid to die
        (So come on)
        Rise up and take the power back
        It's time the fat cats had a heart attack
        You know that their time's coming to an end
        We have to unify and watch our flag ascend
        (So come on)
        They will not force us
        They will stop degrading us
        They will not control us
        We will be victorious
        (So come on)
        They will not force us
        They will stop degrading us
        They will not control us
        We will be victorious
        (So come on)";
        $lyric->year = 2009;
        $lyric->color = "green";
        $lyric->img_url = "uprisingmuse.jpg";
        $lyric->save();


        $lyric = new \App\Models\Lyric();
        $lyric->songname = "Plug In Baby";
        $lyric->songartist = "Muse";
        $lyric->lyrics = "I've exposed your lies, baby
        The underneath no big surprise
        Now it's time for changing
        And cleansing everything
        To forget your love
        My plug in baby
        Crucifies my enemies
        When I'm tired of giving
        My plug in baby
        In unbroken virgin realities
        Is tired of living
        Don't confuse
        Baby you're gonna lose
        Your own game
        Change me
        And replace the envying
        To forget your love
        My plug in baby
        Crucifies my enemies
        When I'm tired of giving
        My plug in baby
        In unbroken virgin realities
        And tired of living
        And I've seen your loving
        Mine is gone";
        $lyric->year = 2001;
        $lyric->color = "red";
        $lyric->img_url = "pluginbaby.jpg";
        $lyric->save();

        $lyric = new \App\Models\Lyric();
        $lyric->songname = "We Are The Champions";
        $lyric->songartist = "Queen";
        $lyric->lyrics = "I've paid my dues
        Time after time
        I've done my sentence
        But committed no crime
        And bad mistakes
        I've made a few
        I've had my share of sand
        Kicked in my face
        But I've come through
        And we mean to go on and on and on and on
        We are the champions, my friends
        And we'll keep on fighting till the end
        We are the champions
        We are the champions
        No time for losers
        'Cause we are the champions of the World
        I've taken my bows
        And my curtain calls
        You brought me fame and fortune
        And everything that goes with it
        I thank you all
        But it's been no bed of roses
        No pleasure cruise
        I consider it a challenge before
        The human race
        And I ain't gonna lose
        And we mean to go on and on and on and on
        We are the champions, my friends
        And we'll keep on fighting till the end
        We are the champions
        We are the champions
        No time for losers
        'Cause we are the champions of the World
        We are the champions, my friends
        And we'll keep on fighting till the end
        We are the champions
        We are the champions
        No time for losers
        'Cause we are the champions of the World";
        $lyric->year = 2001;
        $lyric->color = "blue";
        $lyric->img_url = "wearethechampions.jpg";
        $lyric->save();

        $lyric = new \App\Models\Lyric();
        $lyric->songname = "Madness";
        $lyric->songartist = "Muse";
        $lyric->lyrics = "I, I can't get these memories out of my mind
        And some kind of madness has started to evolve
        I, I tried so hard to let you go
        But some kind of madness is swallowing me whole, yeah
        I have finally seen the light
        And I have finally realized
        What you mean
        Oh oh oh
        And now, I need to know is this real love
        Or is it just madness keeping us afloat?
        And when I look back at all the crazy fights we had
        Like some kind of madness
        Was taking control
        Yeah
        And now I have finally seen the light
        And I have finally realized
        What you need
        Mm
        And now I have finally seen the end (Finally seen the end)
        And I'm not expecting you to care (Expecting you to care)
        But I have finally seen the light (Finally seen the light)
        I have finally realized (Realized)
        I need to love
        I need to love
        Come to me,
        Trust in your dream
        Come on and rescue me
        Yes I have known, I can be wrong
        Maybe I'm too headstrong
        Our love is
        Madness";
        $lyric->year = 2012;
        $lyric->color = "red";
        $lyric->img_url = "madness.jpg";
        $lyric->save();

    }
}
