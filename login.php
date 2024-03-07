<?php
session_start();
            if(isset ($_POST["login"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                    require_once "database.php";
                    $sql = "SELECT * FROM user WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    if ($user) {
                        if(password_verify($password, $user["password"])) {
                            $_SESSION["user"] = "yes";
                            $_SESSION["name"] = $user["First_Name"];
                            header("Location: user_index.php");
                            die();
                        } else {
                            echo "<div class= 'alert alert-danger'>Password does not match</div>";
                        }
                    }else{
                        echo "<div class='alert alert-danger'> Email does not match </div>";
                    }
            }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dabed's Blog | Login</title>
    <link rel="icon" href="images/icon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/login1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&family=Rubik:wght@800&family=Syne:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/homepage.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */ 
        .navbar {
        margin-bottom: 0;
        border-radius: 0;
        }

        .container {
            width: 50%;
            padding: 35px 50px 5px;
            border: 5px solid #F6C90E;
            border-radius: 15px;
        }

        @media only screen and (max-width: 1000px) {
            .container {
                width: 70%;
                margin: 0 auto;
                padding: 35px 50px;
                border: 5px solid #F6C90E;
                border-radius: 15px;
            }
            
        }

        @media only screen and (max-width: 800px) {
            .container {
                width: 80%;
                margin: 0 auto;
                padding: 35px 50px;
                border: 5px solid #F6C90E;
                border-radius: 15px;
            }
            
        }

        @media only screen and (max-width: 600px) {
            .container {
                width: 90%;
                margin: 0 auto;
                padding: 35px 20px;
                border: 5px solid #F6C90E;
                border-radius: 15px;
            }
            
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
            <li><a href="comments.php" class="link-buttons">Comments</a></li>
            <li><a href="about me.php" class="link-buttons">About Me</a></li>
            <li><a style="background-color:#808080" href="login.php" class="link-buttons"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        </div>
    </div>
    </nav>
    <h1 style="font-family: 'Rubik', sans-serif; margin: 0 10px 16px; color:#F6C90E; text-align: center;" id="log_header">Login to Comment!</h1>
    <div class="container">
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password"  required>
            </div>

            <div class="form-btn" style="display: flex; justify-content: center; align-items: center; margin-bottom: 10px; margin-top: 30px;">
                <input style="border-width:3px; width: 90px; padding: 10px 0; font-family: 'Rubik', sans-serif;" type="submit" value="Login" name="login" class="btn btn-primary">
            </div>


        </form>
        <div style="text-align: center;margin-top:7px;"><p style="color:#F4DFC8"><a href="registration.php" style="color:#F4DFC8">Click here to register</a></p></div>
    </div>
</body>
</html>