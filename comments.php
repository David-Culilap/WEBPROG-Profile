<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("Location: user_index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dabed's Blog | Comments</title>
    <link rel="icon" href="images/icon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&family=Rubik:wght@800&family=Syne:wght@700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/user_comments.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */ 
        .navbar {
        margin-bottom: 0;
        border-radius: 0;
        }

        ul {
            list-style-type: none;
            padding: 0; /* Remove default padding */;
        }

        .comment-holder {
            padding: 20px; /* Remove default padding */;
            border: 3px solid #F6C90E; 
            margin: 0 20px 20px;

            color:
        }

        h1 {
            font-family: 'Rubik', sans-serif;
        }

        a {
            color: #F4DFC8;
        }

        a:hover {
            color: #F6C90E;
        }

        .flex-container {
            display: flex;
            justify-content: center;
        }
        
        #comsec {
            width: 90%;
        }
        
        @media only screen and (min-width: 700px) {
          #comsec {
            width: 50%;
          }
        }
        
        ::-webkit-scrollbar {
            display: none;
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
        <a class="navbar-brand active" id="home_button" href="index.php">Dabed's Blog</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="politics.php" class="link-buttons">Politics</a></li>
            <li><a href="technology.php" class="link-buttons">Technology</a></li>
            <li><a href="environment.php" class="link-buttons">Environment</a></li>
            <li><a href="sports.php" class="link-buttons">Sports</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="z-index: 1;">
            <li><a href="comments.php" class="link-buttons" style="background-color:#808080">Comments</a></li>
            <li><a href="about me.php" class="link-buttons">About Me</a></li>
            <li><a href="login.php" class="link-buttons"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        </div>
    </div>
    </nav>

    <h1 style="text-align: center; margin:100px 0 15px; color: #F6C90E">Blog Comments</h1>
    <h3 style="text-align: center; margin-bottom: 30px; font-size: 18px"><a href="login.php">Register/Login to Comment!</a></h3>
    <div class="flex-container" style="height: 500px;">
        <div style="overflow-y: scroll;" id="comsec">
        <?php
            require_once "database.php";
            $sql_select = "SELECT netizen_name, comment FROM comments ORDER BY comment_id DESC";
            $result = $conn->query($sql_select);

            if ($result->num_rows > 0) {
                echo "<ul>";
                while ($row = $result->fetch_assoc()) {
                    echo "<li class='comment-holder' style='font-size: 16px;font-family: Kanit, sans-serif; color: #F4DFC8; border-radius: 10px;'><strong style='font-size: 20px; font-family: Rubik, sans-serif; color:#F6C90E;'>" . $row["netizen_name"] . "</strong><br><br> " . $row["comment"] . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<ul>";
                echo "<li class='comment-holder' style='font-size: 16px;font-family: Kanit, sans-serif; color: #F4DFC8;border-radius: 10px;'><strong style='font-size: 20px; font-family: Rubik, sans-serif; color:#F6C90E;'>No Comments Yet</strong></li>";
                echo "</ul>";
            }
            $conn->close();
            ?>
        </div>
    </div>

    
</body>
</html>