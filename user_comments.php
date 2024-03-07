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

        .flex-container {
            display: flex;
        }
        textarea {
            border: 3px solid #F4DFC8;
            color: #F4DFC8;
            font-family: 'Kanit', sans-serif;
            background-color: rgba(34, 34, 34, 1);
            border-radius: 10px;
            padding: 10px;

            resize: none;
            width: 90%;
            height: 300px;
        }

        textarea:hover {
            border: 3px solid #F6C90E;
        }

        button {
            font-family: 'Rubik', sans-serif;
            color: #F4DFC8;
            background-color: rgba(34, 34, 34, 1);

            border: 3px solid #F4DFC8;
            border-radius: 5px;
            padding: 10px 20px;
        }

        button:hover {
            color: #F6C90E;
            border: 3px solid #F6C90E;
            background-color: rgba(34, 34, 34, 1);
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
            <li><a style="background-color:#808080" href="user_comments.php" class="link-buttons">Comments</a></li>
            <li><a href="user_about me.php" class="link-buttons">About Me</a></li>
            <li><a href="logout.php" class="link-buttons"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
        </div>
    </div>
    </nav>

    <h1 style="text-align: center; margin:100px 0 30px; color: #F6C90E">Blog Comments</h1>
    <div class="flex-container" style="height: 500px;">
        <div style="width: 30%">
            <form method="post" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                <textarea id="comment" name="comment" rows="4" cols="50" placeholder="Write a Comment..."></textarea><br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
        
        <div style="width: 70%; overflow-y: scroll;">
        <?php
            if (isset($_POST['submit'])) 
            {
                require_once "database.php";
                $comment = $_POST['comment'];

                if (! $comment == "") 
                {
                    $name = $_SESSION["name"];

                    $sql_insert = "INSERT INTO comments (netizen_name, comment) VALUES (?, ?)";
                    $stmt_insert = $conn->prepare($sql_insert);
                    $stmt_insert->bind_param("ss", $name, $comment);
                    $stmt_insert->execute();
                    
                }  
            }
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