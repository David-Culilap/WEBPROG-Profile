<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dabed's Blog | Credits</title>
    <link rel="icon" href="images/icon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&family=Rubik:wght@800&family=Syne:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/credits.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */ 
        .navbar {
        margin-bottom: 0;
        border-radius: 0;
        }

        p {
            color: #F4DFC8;
            font-size: 2rem;
        }

        a {
            color: #F4DFC8;
            font-size: 2rem;
        }
        

    </style>
</head>
<body>

<nav class="navbar navbar-inverse" style="z-index: 1;">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand active" id="home_button" href="user_index.php">Dabed's Blog</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="user_politics.php" class="link-buttons">Politics</a></li>
            <li><a href="user_technology.php" class="link-buttons">Technology</a></li>
            <li><a href="user_environment.php" class="link-buttons">Environment</a></li>
            <li><a href="user_sports.php" class="link-buttons">Sports</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="z-index: 1;">
            <li><a href="user_comments.php" class="link-buttons">Comments</a></li>
            <li><a href="user_about me.php" class="link-buttons">About Me</a></li>
            <li><a href="logout.php" class="link-buttons"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
        </div>
    </div>
    </nav>

    <div id="sport1">
        <img src="images/sports/mamamo.jpg">

        <div>
            <p style="font-size: 1.5rem">Image by: ABC News</p>
            <p style="font-size: 1.5rem">Date: August 29, 2023</p>
            <a style="font-size: 1.5rem" href="https://www.abc.net.au/news/2023-08-29/world-champion-of-what-noah-lyles-takes-swipe-at-nba/102788262" target="_blank">View Image Link</a>
        </div>

    </div>

    <div id="pol1">
        <img src="images/politics/pol1.jpg">

        <div>
            <p style="font-size: 1.5rem">Image by: LinkedIn</p>
            <p style="font-size: 1.5rem">Date: June 5, 2017</p>
            <a style="font-size: 1.5rem" href="https://www.linkedin.com/pulse/5-things-you-can-do-stop-terrorism-ana-isabel-mota-teles" target="_blank">View Image Link</a>
        </div>

    </div>

    <div id="pol2">
        <img src="images/politics/pol2.jpeg">

        <div>
            <p style="font-size: 1.5rem">Image by: Manila Bulletin</p>
            <p style="font-size: 1.5rem">Date: Oct 26, 2022 07:35 PM</p>
            <a style="font-size: 1.5rem" href="https://mb.com.ph/2022/10/26/people-have-misunderstood-marcos-defends-appointments-of-cascolan-soriano" target="_blank">View Image Link</a>
        </div>
    </div>

    <div id="tech1">
        <img src="images/technology/tech1.jpg">

        <div>
            <p style="font-size: 1.5rem">Image by: TED</p>
            <p style="font-size: 1.5rem">Date: ---</p>
            <a style="font-size: 1.5rem" href="https://i.pinimg.com/originals/79/69/88/796988184857d8b9bda6b024b519021d.jpg" target="_blank">View Image Link</a>
        </div>
    </div>

    <div id="tech2">
        <img src="images/technology/tech2.jpg">

        <div>
            <p style="font-size: 1.5rem">Image by: Software Design Solutions (SDS)</p>
            <p style="font-size: 1.5rem">Date: ---</p>
            <a style="font-size: 1.5rem" href="https://softwaredesignsolutions.com/blog/iot-medical-devices-are-the-future-of-healthcare-sds-blog/" target="_blank">View Image Link</a>
        </div>
    </div>

    <div id="env1">
        <img src="images/environment/environment-1.jpg">

        <div>
            <p style="font-size: 1.5rem">Image by: VODzilla</p>
            <p style="font-size: 1.5rem">Date: July, 2017</p>
            <a style="font-size: 1.5rem" href="https://vodzilla.co/wp-content/uploads/2017/07/Chasing-Coral-Still_7.jpg" target="_blank">View Image Link</a>
        </div>
    </div>

    <div id="env2">
        <img src="images/environment/environment-2.jpg">

        <div>
            <p style="font-size: 1.5rem">Image by: NPSEC</p>
            <p style="font-size: 1.5rem">Date: ---</p>
            <a style="font-size: 1.5rem" href="https://npsec.us/wp-content/uploads/invasive-species-banner-2.jpg" target="_blank">View Image Link</a>
        </div>
    </div>

    <div id="abt_me_pic">
        <img src="images/aboutme/achievements/achievements-1.jpg">

        <div>
            <p style="font-size: 1.5rem">Image by: Codability Tech Student Organization - NU FV</p>
            <p style="font-size: 1.5rem">Date: August 18, 2023 </p>
            <a style="font-size: 1.5rem" href="https://www.facebook.com/codabilitytechorg/posts/pfbid02EsyGnK2xFchixfE6dZEj2yetwBCR2eXN1aoycieYF6QwpNJzzjBEofZJJhCpBNasl" target="_blank">View Image Link</a>
        </div>
    </div>

    <h6 style="color:#F6C90E; text-align: center; font-size: 1rem; padding:30px">All of the images and videos seen in the website that are not included in this credits page are owned by David Culilap, the Web Programmer himself.</h6>
</body>
</html>