@extends('layout')

@section('content')
<div class="grid">
    <article>
        <section>
            <h1>Motivatie studiekeuze</h1>
            <p>
                Ik heb deze studie gekozen omdat het mij heel interessant lijkt om
                meer te weten in de ICT. En ik heb deze studie gekozen omdat je
                later er meer mee kan doen, want je kan er heel veel verschillende
                kanten op. Ook heb ik voor deze studie gekozen omdat het mij gewoon
                heel leuk lijkt om later wat te doen in de ICT.
            </p>
        </section>
        <section>
            <h1>Na het voltooien van de opleiding</h1>
            <p>
                Ik weet nog niet wat ik na deze opleiding wil doen, dus daarom is
                deze opleiding al heel handig. Mij lijkt het interessant om software
                te maken, omdat ik wil kijken wat ik er allemaal mee kan maken. Ik
                hoop over vier jaar geleerd te hebben om software te maken en
                verschillende programmeertalen te leren.
            </p>
        </section>
        <section>
            <h1>Studiekeuzeactiviteiten</h1>
            <p>
                Open dag: HZ (HBO-ICT), Breda University of Applied Sciences
                (Creative Media and Game Technologies) Avans hogeschool
                (Informatica) Ik heb ook de studiekeuze test uitgevoerd, maar geen
                meeloopdagen.
            </p>
        </section>
        <section>
            <h1>SWOT-analyse</h1>
            <h3>Wat zijn je sterke punten?</h3>
            <p>Ik kan goed communiceren andere mensen, dus goed samenwerken.</p>
            <h3>Wat zijn je valkuilen?</h3>
            <p>Ik raak heel snel afgeleid.</p>
            <h3>Welke kansen zie je?</h3>
            <p>
                Ik woon niet zo heel ver van het HZ, dus ik heb minder reistijd en
                meer tijd voor school.
            </p>
            <h3>Welke risico’s zie je?</h3>
            <p>Ik game nogal veel.</p>
        </section>
        <section>
            <h3>Heb je nog programmeerervaring?</h3>
            <p>Ja, ik heb die ervaring van mijn vooropleiding en Interesses.</p>
            <h3>Beschrijf jouw programmeerervaring?</h3>
            <p>
                Ik heb al een beetje HTML en CSS gedaan in Havo 4, en in Havo 5 zijn
                we nu PHP aan het doen. Zelf uit eigen interesse heb ik een beetje
                C# geleerd voor Unity, en C++ voor Unreal Engine.
            </p>
        </section>
        <section>
            <h3>Feedback</h3>
            <p>
                "Hoi Milan, Dankjewel voor het invullen van het wie ben ik
                formulier. Prima om een start te maken in onze opleiding en
                gaandeweg erachter te komen wat je het leukst gaat vinden in de ICT.
                Voordeel is dat je niet de enige Gamer gaat zijn in de groep en je
                krijgt ook een project tijdens je studie waar je een game mag
                ontwikkelen. Kan je je hobby meteen toepassen. Gamen kan echter ook
                in de weg komen te zitten van je studie dus dat is misschien wel
                iets waar je op moet passen. Op basis van je formulier zie ik geen
                reden voor een persoonlijke gesprek, ik hoop je te ontmoeten bij een
                van onze groepsinformatie sessie in juni / juli daarover krijg je
                nog bericht. Heel veel succes met de komende examens en mocht je
                toch nog vragen gaan krijgen aarzel niet om ze te stellen Groet,
                Daphne"
            </p>
        </section>
        <section>
            <h3>Eerste feedback website</h3>
            <p>
                Nadat ik alle opdrachten heb gemaakt en de feedback heb bekeken ben
                ik erachter gekomen dat ik vooral de fout in ben gegaan bij het
                coderen want ik had bijvoorbeeld een extra div staan die niet werd
                gebruikt, elementen die ik had genest waar het niet mocht. En ik had
                ook nog bepaalde dingen anders kunnen coderen zodat het beter
                werkte, compacter werd en dat het overzichtelijker werd.
            </p>
        </section>
        <section>
            <h3>HackerOne</h3>
            <h4>IT rollen</h4>
            <ul>
                <li>Engineering Manager</li>

                <li>
                    Productmanager: Zorgt ervoor dat de projectleider op één lijn zit
                    met de bedrijfsrichting en de informatie heeft die hij nodig
                    heeft.
                </li>

                <li>
                    Product designer: Werkt samen met Product manager en project lead
                    om alle benodigde UI en UX design te creëren.
                </li>

                <li>5 engineers</li>
            </ul>
            <h4>Technologieën</h4>
            <ul>
                <li>Clientside: react, tailwind and apollo</li>
                <li>Serverside: graphQL, ruby on rails</li>
                <li>Testing: Rspec and cucumber</li>
                <li>Infrastructure: postgres, redis/sidekiq</li>
            </ul>
            <h4>Voor en Nadelen</h4>
            <p>
                Het voordeel is dat je bedrijven legaal mag hacken. Het nadeel is
                dat als je het illegaal zou doen, het veel meer oplevert.
            </p>
        </section>
        @foreach($articles as $article)
            <h3><a href="/blog/{{$article->id}}">{{$article->title}}</a></h3>
            <p><a>{{$article->excerpt }}</a></p>
        @endforeach
    </article>
</div>
</body>
</html>
@endsection
