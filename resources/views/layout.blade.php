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
        <li class="{{Request::path() === 'home' ? 'current_page_item': '' }}"><a href="home" accesskey="1" title="">home</a></li>
        <li class="{{Request::path() === 'profile' ? 'current_page_item': '' }}"><a href="profile" accesskey="2" title="">profile</a></li>
        <li class="{{Request::path() === 'dashboard' ? 'current_page_item': '' }}"><a href="dashboard" accesskey="3" title="">dashboard</a></li>
        <li class="{{Request::path() === 'faq' ? 'current_page_item': '' }}"><a href="faq" accesskey="4" title="">FAQ</a></li>
        <li class="{{Request::path() === 'blog' ? 'current_page_item': '' }}"><a href="blog" accesskey="5" title="">blog</a></li>
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

@yield('content')
</body>
</html>
