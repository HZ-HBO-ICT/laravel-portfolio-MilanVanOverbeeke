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
<h1>Profile</h1>
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
        <li><a href="blog">blog</a></li>
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
<div id="main" class="grid">
    <article>
        <ul>
            <li>Naam: Milan van Overbeeke</li>
            <li>Leeftijd: 17 jaar</li>
            <li>Woonplaats: Biezelinge</li>
            <li>Woonsituatie: Bij mijn Ouders</li>
            <li>Vooropleidingen: Havo</li>
            <li>Profiel: E&M</li>
        </ul>
        <section>
            <h3>werk</h3>
            <p>
                Ik heb 2 bijbanen, vakkenvuller bij de Jumbo en opruimer/
                schoonmaker bij Glasconcept. In mijn vrije tijd game ik. Ik wil best
                wel mijn baantjes opgeven voor mijn studie.
            </p>
        </section>
        <section>
            <h3>hobbies</h3>
            <ul>
                <li>Gamen</li>
            </ul>
        </section>
        <iframe
            width="500"
            height="290"
            src="https://www.youtube.com/embed/HV1O9TaK_qg"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
        ></iframe>
    </article>
</div>
<script
    src="https://kit.fontawesome.com/32ee1d45c9.js"
    crossorigin="anonymous"
></script>
</body>
</html>
