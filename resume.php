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
        Resume
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
</div>
<div class="flex-container" id="main">
    <header>
        <span onclick="openNav()">
        <button class="menuButton"> Menu </button>
    </span>
        <h1>Josh Caruso</h1>
    </header>
        <embed id="resume" src="files/resume.pdf" width="75%" height="75%" type='application/pdf'>
<!--        --><?php
//        header("Content-type: application/pdf");
//        header("Content-Disposition: inline; filename=resume.pdf");
//        @readfile('files\resume.pdf');
//?>

    <footer><strong>Josh Caruso</strong>
        <p><a href="mailto:josh.caruso@gmail.com">josh.caruso@gmail.com</a></p>
    <p>708.514.4282</p></footer>
</div>
</body>

</html>
