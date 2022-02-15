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
<h1>Dashboard</h1>
<nav>
    <ul>
        <li>
            <a
            ><span onclick="openNav()"><i class="fas fa-bars"></i></span
                ></a>
        </li>
        <li><a href="index">home</a></li>
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

<table>
    <tr>
        <th>Quartile</th>
        <th>Course</th>
        <th>Ec</th>
        <th>Exam</th>
        <th>Grade</th>
    </tr>
    <tr>
        <td rowspan="3">1</td>
        <td>Programme and Career Orientation</td>
        <td>2.5</td>
        <td>Assessment</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="1">Computer Science Basics</td>
        <td rowspan="1">5</td>
        <td>Written exam</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Programming Basics</td>
        <td>5</td>
        <td>Case study</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="2">2</td>
        <td rowspan="2">Object Oriented Programming</td>
        <td rowspan="2">10</td>
        <td>case study</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Project</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="4">3</td>
        <td>Framework Development 1</td>
        <td>5</td>
        <td>Case study</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="3">Framework Project 1</td>
        <td rowspan="3">7.5</td>
        <td>project</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Assessment</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Report</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="3">4</td>
        <td rowspan="3">Framework Project 2</td>
        <td rowspan="3">10</td>
        <td>Portfolio</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Project</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Assessment</td>
        <td>-</td>
    </tr>
    <tr>
        <td>Entire year</td>
        <td>Course</td>
        <td>12,5</td>
        <td>Portfolio</td>
        <td>-</td>
    </tr>
    <tr>
        <td rowspan="2">Ooit</td>
        <td>Personality 1</td>
        <td>1.25</td>
        <td></td>
        <td>-</td>
    </tr>
    <tr>
        <td>Personality 2</td>
        <td>1,25</td>
        <td></td>
        <td>-</td>
    </tr>
</table>
<p>
    <label for="file">minimale studiepunten: 45</label>
    <progress id="file" value="30" max="45"></progress>
</p>
<p>
    <label for="file1">maximale studiepunten: 60</label>
    <progress id="file1" value="30" max="60"></progress>
</p>
</body>
</html>
