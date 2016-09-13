<?php
/**
 * Created by PhpStorm.
 * User: DevVM
 * Date: 8/31/2016
 * Time: 2:38 PM
 */
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <script type="text/javascript" src="js/pagescript.js"></script>
    <title>
        Home
    </title>
</head>
<body>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Home</a>
    <a href="school.php">School</a>
    <a href="projects.php">Projects</a>
    <a href="hobbies.php">Hobbies</a>
    <a href="resume.php">Resume</a>
    <br><br><br>
    <a href="https://www.linkedin.com/pub/josh-caruso/44/7b0/297">
        <img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_myprofile_160x33.png" width="160"
             height="33" border="0" alt="View Josh Caruso's profile on LinkedIn">
    </a>
    <span id="lastUpdate">Last updated: 9/13/2016</span>
</div>
<div class="flex-container" id="main">
    <header>
    <span onclick="openNav()">
        <button class="menuButton"> Menu </button>
    </span>
        <h1>Josh Caruso</h1>

    </header>

    <article class="article">
        <h2>About Me</h2>
        My name is Josh Caruso. I am pursuing my Computer Information Technology degree at Metropolitan State University
        in St. Paul, Minnesota.
        <p>I grew up in Chicagoland. I started my college career by starting a Culinary Arts program at Triton College.
            I finished with an Associates degree in Restaurant Management in 2009.</p>
        <p>I moved to Minnesota in 2010 when my then girlfriend took a job in Minneapolis. Since then she has become my wife. 
		I started at Metropolitan State University in 2012.</p>
        <br><br><br>
    </article>
    <article class="article">
        <br><image id="facepic" src="images/1.jpg"</image>
    </article>
    <footer id="footerhome"><strong>Josh Caruso</strong>
        <p><a href="mailto:josh.caruso@gmail.com">josh.caruso@gmail.com</a></p>
        <p>708.514.4282</p></footer>
</div>
</body>

</html>
