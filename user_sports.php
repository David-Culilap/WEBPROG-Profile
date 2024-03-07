<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dabed's Blog | Sports</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&family=Rubik:wght@800&family=Syne:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/homepage.css">
        <link rel="stylesheet" href="css/articles.css">
        <link rel="icon" href="images/icon.png" type="image/x-icon"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
        <style>
            .navbar {
            margin-bottom: 0;
            border-radius: 0;
            }

            h2 {
                color: #F6C90E;
                font-family: 'Rubik', sans-serif;
                font-size: 35px;
                margin-bottom: 10px;
            }

            .references > a {
                text-decoration: underline;
            }

            article > div > p {
                margin-bottom: 15px !important;
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
            <li><a style="background-color:#808080" href="user_sports.php" class="link-buttons">Sports</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="z-index: 1;">
            <li><a href="user_comments.php" class="link-buttons">Comments</a></li>
            <li><a href="user_about me.php" class="link-buttons">About Me</a></li>
            <li><a href="logout.php" class="link-buttons"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
        </div>
    </div>
    </nav>

    <article id="article-1">
            <div>
                <h2>World Champions of What?!</h2>
                <img src="images/sports/mamamo.jpg">
                <p style="color:#F6C90E; padding:0; margin:0">Image by: ABC News | <a target="_blank" href="user_credits.php#sport1" style="color:#F6C90E">View full credits</a></p>
            </div>
            
            <p>Have you ever watched the NBA finals and saw the winning team hanging a banner on their arena with the title ‘world champions’ along with it? Well, not long ago, U.S. sprinter Noah Lyles has shared his sentiments regarding this matter where the NBA calls themselves ‘world champions’ every time a team has won the NBA championship. Along with Lyles, some folks reckon that's not quite right. See, the NBA is huge in North America, no doubt about it. But when it comes to basketball on a global scale, there's more to the game than just what's happening in the States. Take the Olympics, for example, or the FIBA World Cup. Those events bring together teams from all over the world, each representing their own country. It's like a big melting pot of basketball talent from everywhere. When you see teams like Spain, Argentina, or Australia go head-to-head with Team USA, that's when you're seeing true international competition. </p>
            <p>Now, one might argue that ‘A lot of non-american players play in the NBA.’ Sure, it's true that many players from around the world dream of making it to the NBA, and there are indeed numerous non-American players competing in the league. It's a testament to the NBA's global appeal and the talent it attracts. However, just because players from various countries participate in the NBA doesn't necessarily mean it should be dubbed the "world championship" platform. I never watched an NBA game where there are teams are named based on a certain country. It’s because the NBA IS NOT INTERNATIONAL COMPETITION. There are other national basketball leagues out there who accept non-native players, but you never saw their winners calling themselves ‘world champions’ do you? So, how is it any different in the NBA? So, when the NBA winners get called "world champions," it kinda overlooks all that global hoop action. It's not that they're not super talented or deserving of recognition, players in the NBA are undoubtedly and incredibly amazing at their craft. The players’ skills in the NBA are probably unmatched compared to other national leagues out there. But, despite all that, let's keep it real and acknowledge the difference between being the best in your league and being the best on a worldwide stage.</p>

            <div class="references">
                <a class="read-more" href="https://www.latimes.com/sports/story/2023-08-28/noah-lyles-nba-world-champion-track-and-field-kevin-durant-damian-lillard" target="_blank">Read More</a>
                <a href="https://www.abc.net.au/news/2023-08-29/world-champion-of-what-noah-lyles-takes-swipe-at-nba/102788262" target="_blank">Image Source</a>
            </div>
        
        </article>
    </body>
</html>