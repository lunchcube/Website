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
        Hobbies
    </title>
    <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
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
    <div id="outdoorPics">
        <h2>I enjoy camping, backpacking and the outdoors. I always make sure to bring a camera.</h2>
        <br>(pictures best viewed full screen)<br>
        <img onclick="toTheTop()" class="fancybox" src="images/2.jpg" width="1020px" height="200px" title="Lake Superior at Cascade River Mouth">
        <br>
        <img onclick="toTheTop()" class="fancybox" src="images/3.jpg" width="250px" height="200px" title="Pablo trying to catch trout">
        <img onclick="toTheTop()" class="fancybox" src="images/4.JPG" width="250px" height="200px" title="Grand Marais looking for a fishing spot">
        <img onclick="toTheTop()" class="fancybox" src="images/5.JPG" width="250px" height="200px" title="Sail boat out in the fog">
        <img onclick="toTheTop()" class="fancybox" src="images/6.JPG" width="250px" height="200px" title="Gray keeping an eye on the poles">
        <br>
        <img onclick="toTheTop()" class="fancybox" src="images/7.JPG" width="250px" height="200px" title="Angie and I at Gooseberry Falls">
        <img onclick="toTheTop()" class="fancybox" src="images/8.JPG" width="250px" height="200px" title="Cool morning on the SHT">
        <img onclick="toTheTop()" class="fancybox" src="images/9.JPG" width="250px" height="200px" title="Frankie and I on the SHT">
        <img onclick="toTheTop()" class="fancybox" src="images/10.JPG" width="250px" height="200px" title="Bridge at Temperance River State Park">
        <br>
        <img onclick="toTheTop()" class="fancybox" src="images/13.JPG" width="250px" height="200px" title="Fall in northern Minnesota">
        <img onclick="toTheTop()" class="fancybox" src="images/14.JPG" width="250px" height="200px" title="Lake off the SHT">
        <img onclick="toTheTop()" class="fancybox" src="images/15.JPG" width="250px" height="200px" title="Fall in northern Minnesota">
        <img onclick="toTheTop()" class="fancybox" src="images/16.JPG" width="250px" height="200px" title="Lake Superior">
        <br>
		<img onclick="toTheTop()" class="fancybox" src="images/17.JPG" width="250px" height="200px" title="Lake Superior">
		<img onclick="toTheTop()" class="fancybox" src="images/18.JPG" width="250px" height="200px" title="Lake Superior">
    </div>
    <div id="foodPics">
        <h2>I went to culinary school and I enjoy cooking at home.</h2>
        <img onclick="toTheTop()" class="fancybox" src="images/11.JPG" width="200px" height="250px" title="A Charcuterie board Angie and I made">
        <img onclick="toTheTop()" class="fancybox" src="images/12.JPG" width="250px" height="200px" title="Lights at a museum">
    </div>
    <footer><strong>Josh Caruso</strong>
        <p><a href="mailto:josh.caruso@gmail.com">josh.caruso@gmail.com</a></p>
        <p>708.514.4282</p></footer>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
</script>
</body>
</html>
