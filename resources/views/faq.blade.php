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
    <style>
        p {
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
<h1>Frequently Asked Questions</h1>
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
<article id="faq">
    <h3>1. Hoe print je een document hier op HZ?</h3>
    <p>print.hz.nl</p>
    <h3>
        2. Hoe scan je een document en stuur je dit naar je laptop hier op de
        HZ?
    </h3>
    <p>
        Als je verbonden bent met de printer kan je je HZ pas scannen en dan met
        de printer inscannen. Het PDF bestand zou automatisch op je computer
        moeten komen.
    </p>
    <h3>
        3. Wat moet je doen als je ziek bent of symptomen van het corona virus?
    </h3>
    <p>
        Als je ziek bent of coronaklachten hebt moet je echt niet naar school
        komen en het je docent via teams laten weten. Volg alle lessen zodat je
        geen achterstand oploopt
    </p>
    <h3>
        4. Hoe kun je een projectruimte boeken in één van de vleugels van het
        gebouw?
    </h3>
    <p>
        Als je inlogt op MYHZ kan je via je Persoonlijk Menu naar Selfservice
        Portal gaan. Vanuit hier kan je een nieuwe reservering aanvragen. Hierna
        kies je een tijdspan voor wanneer je de ruimte wil huren en ben je
        klaar.
    </p>
    <h3>
        5. Wat zijn de instructies om je auto te parkeren op het HZ
        parkeerterrein?
    </h3>
    <p>
        Gratis parkeren is mogelijk op het parkeerterrein van PZEM aan de
        Poelendaelesingel 10 in Middelburg. Dit is op een paar minuten lopen
        afstand naar de HZ. Het is helaas niet mogelijk om direct bij het
        HZ-pand te parkeren. Bij het pand zelf zijn wel twee invalideplaatsen en
        plekken voor HZ-auto’s. Let op, parkeer je aan de Poelendaelesingel, dan
        kun je niet via het tunneltje de HZ bereiken i.v.m. de bouwwerkzaamheden
        voor het Joint Research Center Zeeland. Je kan via het kruispunt bij de
        stoplichten oversteken.
    </p>
</article>
</body>
</html>
