<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dabed's Blog | Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&family=Rubik:wght@800&family=Syne:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon"/>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/01196ce632.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */ 
        .navbar {
        margin-bottom: 0;
        border-radius: 0;
        }

        @keyframes fadeIn {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 0.9;
                }
        }

        img {
            width: 60%;
            margin-bottom: 20px;
            border-radius: 30px;
            animation-name: fadeIn;
            animation-duration: 2s;
            animation-fill-mode: forwards;
        }
        
        #socials {
            margin-top: 30px;     
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

    <div>
        <section id="intro" class="container" style="margin-top: 100px; margin-bottom: 50px">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="images/homepage/em.jpg" id="me-img" title="a pic of me" class="img-responsive" style="width:75%; z-index: -1;">
                    </div>

                    <div class="col-sm-6" id="lol">
                        <h2>Hello There!</h2>
                        <p>My name is David Culilap and welcome to my Blog Website!
                            Feel free to browse and read about my various insights and hot takes on a wide array of topics. 
                            Also, take time to leave a comment in our comment section regarding the blogs that you've read. 
                            I hope you find this website interesting and have fun reading!</p>
                        <div id="socials">
                            <a href="https://github.com/David-Culilap" target="_blank"><i class="fa-brands fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/david-culilap-b5a3122ab/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://www.facebook.com/david.culilap/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        
        </section>
    </div>

    <footer>

    </footer>
</body>
</html>
