<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Website Milan</title>
    <link rel="stylesheet" href="layout.css" />
    <link
        rel="stylesheet"
        href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
    <script
        src="https://kit.fontawesome.com/32ee1d45c9.js"
        crossorigin="anonymous"
    ></script>
</head>

<body>
<h1>Milan's Website</h1>
<nav>
    <ul>
        <li>
            <a
            ><span onclick="openNav()"><i class="fas fa-bars"></i></span
                ></a>
        </li>
        <li><a href="home">home</a></li>
        <li><a href="profile">profile</a></li>
        <li><a href="dashboard">dashboard</a></li>
        <li><a href="faq">FAQ</a></li>
        <li><a href="blogs">blog</a></li>
    </ul>
</nav>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
    >&times;</a
    >
    <li>
        <a
            href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen.html"
        >HZ Onderwijs- en examenregelingen</a
        >
    </li>
    <li>
        <a
            href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf"
        >HZ HBO-ICT Uitvoeringsregeling
        </a>
    </li>
    <li><a href="https://learn.hz.nl/my/.html">HZ learn</a></li>
    <li>
        <a
            href="https://teams.microsoft.com/l/channel/19%3a827654897ab746089c081f24aff1c984%40thread.skype/Algemeen?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c.html"
        >
            HZ teams ICT</a
        >
    </li>
    <li>
        <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus.html"
        >HZ studievoortgang</a
        >
    </li>
    <li>
        <a
            href="https://github.com/MilanVanOverbeeke/MilanVanOverbeeke.github.io"
        >github</a
        >
    </li>
</div>
<main>
    <article>
        <h1>Motivatie</h1>
        <section>
            <p>
                Al sinds de lagere school ben ik geïnteresseerd in computers en ik
                heb me altijd afgevraagd hoe programma's daarop werden gemaakt. In
                mijn vierde jaar had ik informatica als extra keuzevak gekozen en
                het werd mijn lievelingsvak omdat ik het heel interessant vond, in
                tegenstelling tot mijn andere vakken. We hadden een website gemaakt
                zonder enige programmeerervaring en ik had daar veel tijd in
                gestoken omdat ik het bouwen van een website zo leuk vond. En in
                mijn vijfde jaar bouwden we weer een website, maar deze keer met een
                PHP-webserver en dat ging gelukkig veel beter dan de vorige website.
            </p>

            <p>
                Maar waarom ik ICT heb gekozen is omdat ik het heel leuk vind om
                computers te gebruiken en er mee te werken. Maar dat is niet de
                enige reden. Het is ook een goede gelegenheid om nieuwe mensen te
                ontmoeten die in dezelfde dingen geïnteresseerd zijn als ik. Ik kies
                voor ICT om te leren hoe programma's voor computersystemen te bouwen
                en op te zetten.
            </p>
        </section>
        <img
            src="images/milan.jpg"
            alt="Milan van Overbeeke"
            width="375"
            height="450"
        />
    </article>
</main>
<footer>
    <ul>
        <li>Milan van Overbeeke</li>
        <li><a href="https://hz.nl/">hz.nl</a></li>
        <li><a href="https://learn.hz.nl/my/">learn.hz.nl</a></li>
        <img
            src="images/hz_logo_1.jpg"
            alt="hz logo"
            width="100"
            height="100"
        />
    </ul>
</footer>
</body>
</html>
