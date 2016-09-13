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
        School
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
    <article class="article">
        <details>
            <summary>ICS 140 - Programming Fundamentals</summary>
            <p>Learn basics of Java syntax and fundamentals such as looping, methods, arrays and text I/O.</p>
        </details>
        <details>
            <summary>ICS 141 - Programming with Objects</summary>
            <p>Continued use of Java language using objects, classes GUI, and layout managers. Introduced to
                containment, inheritance and polymorphism. Projects involving multiple classes with an emphasis on
                methods, parameter passing and arrays of objects.</p>
        </details>
        <details>
            <summary>ICS 225 - Web Design/Implementation</summary>
            <p>Create web pages using notepad using HTML, CSS, JavaScript while keeping good interface design, human
                factors, and ethical concerns in mind. Practice regular expressions throughout the duration of the course.</p>
        </details>
        <details>
            <summary>CFS 262 - Computers and Operating Systems I</summary>
            <p>Learned basic concepts of computer organization and architecture, memory management, process handling,
                disk and file management and control, and peripherals operation. Also learned the techniques and
                procedures of system installation, configuration, administration, and troubleshooting using Windows 7.</p>
        </details>
        <details>
            <summary>CFS 264 - Computers and Operating Systems II</summary>
            <p>Expanded on concepts from CFS 262 using a Linux operating system through Putty. Covered basic shell
                commands, bash scripting, perl scripting, Pico, Sed, Vim, Awk, Grep. Introduction to TCP/IP, subnets and
                masking, IP address classes.</p>
        </details>
        <details>
            <summary>ICS 311 - Database Management Systems</summary>
            <p>Topics included conceptual, logical and physical database design theories and techniques, such as use of
                Entity Relationship diagrams, query tools and SQL; responsibilities of data and database administrators;
                database integrity, security and privacy. Use of database management systems such as MySQL. Coverage of
                HCI (Human Computer Interaction) topics. Development of GUI front ends to databases with application of
                HCI principles to provide a high level usability experience.</p>
        </details>
    </article>
    <article class="article">
        <details>
            <summary>ICS 370 - Software Design Models</summary>
            <p>The course focuses on how to design and build process, object and event models that are translatable into
                project specifications and design. Topics include an overview of systems analysis and design; a framework
                for systems architecture; design and development using data modeling; object modeling, entities,
                relationships, attributes, scope rules and influences; and event models, messaging and application
                activation.</p>
        </details>
        <details>
            <summary>ICS 240 - Intro to Data Structures</summary>
            <p>Students learn intermediate object-oriented design, programming, debugging, testing skills, and algorithms
                in this course via the study of list, stack, queue and tree abstract data types. Other topics include
                recursion, hashing, sorting, complexity analysis, and documentation. Design, testing, and complexity
                analysis are emphasized. Programming intensive.</p>
        </details>
        <details>
            <summary>ICS 382 - Computer Security</summary>
            <p>This course introduces computer security aspects of computer systems. The course presents a current
                technical look at computer system strengths and vulnerabilities, and techniques to effectively protect
                these assets. Topics include security threats, security management, operating systems, network firewall
                and security measures.</p>
        </details>
        <details>
            <summary>ICS 460 - Networks and Security</summary>
            <p>Principles and practices of the OSI and TCP/IP models of computer networks, with special emphasis on the
                security of these networks. Coverage of general issues of computer and data security. Introduction to the
                various layers of network protocols, including physical, data link, network, and transport layers, flow
                control, error checking, and congestion control. Computer system strengths and vulnerabilities, and
                protection techniques: Topics include applied cryptography, security threats, security management,
                operating systems, network firewall and security measures. Focus on secure programming techniques.
                Programming projects.</p>
        </details>
        <details>
            <summary>ICS 325 - Internet Application Development</summary>
            <p>This course focuses on how to design and establish information services over the Internet from the server
                side. Topics include advanced concepts and issues on Internet architecture, server-side design strategies,
                current technologies and Internet security. Through labs and programming projects, students learn how to
                use current scripting and markup languages to build nontrivial state-of-the-art applications.</p>
        </details>
        <details>
            <summary>ICS 499 - Software Engineering and Capstone Project</summary>
            <p>This course focuses on the theory and practice of effectively and efficiently building software systems
                that satisfy the requirements placed upon them by customers. This course gives an overview of the
                software lifecycle and introduces various process models used to develop software.</p>
        </details>

    </article>
    <footer><strong>Josh Caruso</strong>
        <p><a href="mailto:josh.caruso@gmail.com">josh.caruso@gmail.com</a></p>
        <p>708.514.4282</p></footer>
</div>
</body>

</html>
