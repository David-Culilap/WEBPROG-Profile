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
    <title>Dabed's Blog | Registration</title>
    <link rel="icon" href="images/icon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&family=Rubik:wght@800&family=Syne:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/registration1.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */ 
        .navbar {
        margin-bottom: 0;
        border-radius: 0;
        }
        
        #submit_btn {
            background-color: #222222;
            color: #F4DFC8;
            border-color: #F4DFC8;
        }
        
        #submit_btn:hover {
            color: #F6C90E;
            border-color: #F6C90E;
        }
        
        #login_link {
            color:#F4DFC8;
        }
        #login_link:hover {
            color: #F6C90E;
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
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
    <h1 style="font-family: 'Rubik', sans-serif; margin: 100px 10px 16px; color:#F6C90E; text-align: center; font-size:30px" id="log_header">Register to Comment!</h1>
    <div id="mamamo" style="display:flex; justify-content: center; align-items: center">
    <div class="container" style="margin: 0 0 50px 0">
        
        <?php
            if(isset($_POST["submit"])){
                $LastName = $_POST["LastName"];
                $FirstName = $_POST["FirstName"];
                $country = $_POST["country"];
                $province = $_POST["province"];
                $city = $_POST["city"];
                $barangay = $_POST["barangay"];
                $phone = $_POST["phone"];
                $email = $_POST["Email"];
                $password = $_POST["password"];
                $repeatPassword = $_POST["repeat_password"];
                
                $blklot = $_POST["blklot"];
                $street = $_POST["street"];
                $subd = $_POST["subd"];

                $passwordHash = password_hash($password, PASSWORD_DEFAULT); // NEW
                $errors = array();

                if (empty($LastName) OR empty($FirstName) OR empty($email) OR empty($password) OR empty($repeatPassword) OR empty($country) OR empty($province) OR empty($city) OR empty($barangay) OR empty($phone) OR empty($blklot) OR empty($street) OR empty($subd)) {
                    array_push($errors, "All fields are required");
                }
                
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "Email is not valid");
                }

                if (strlen($password)<8) {
                    array_push($errors, "Password must be at least 8 characters long");
                }

                if ($password!= $repeatPassword) {
                    array_push($errors, "Password does not match");
                }

                require_once "database.php";
                $sql  = "SELECT * FROM user WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount>0) {
                    array_push($errors, "Email Already Exist!");
                }

                if (count($errors)>0) {
                    foreach($errors as $error) {
                        echo"<div class='alert alert-danger'>$error</div>";
                        }
                } else {
                    require_once "database.php";
                    $sql  = "INSERT INTO user (Last_Name, First_Name, blklot, street, barangay, subd, country, province, city, email, phone, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $preparestmt = mysqli_stmt_prepare($stmt, $sql);
                    if ($preparestmt) {
                        mysqli_stmt_bind_param($stmt, "ssssssssssss", $LastName, $FirstName, $blklot, $street, $barangay, $subd, $country, $province, $city, $email, $phone, $passwordHash);
                        mysqli_stmt_execute($stmt);
                        echo "<div class = 'alert alert-success'>You are registered successfully! </div>";
                    } else {
                        die("Something went wrong.");
                    }
                }
            }   
            ?>
        <form action="registration.php" method="post">
        <div class="form-group" style="display: flex;">
            <input type="text" class="form-control" name="LastName" placeholder="LastName: " style="margin-right: 10px;">
            <input type="text" class="form-control" name="FirstName" placeholder="FirstName: ">
        </div>
        <div class="form-group" style="display: flex;">
            <input type="text" class="form-control" name="blklot" placeholder="Lot/Blk: " style="margin-right: 10px;">
            <input type="text" class="form-control" name="street" placeholder="Street: " style="margin-right: 10px;">
        </div>
        <div class="form-group" style="display: flex;">
            <input type="text" name="barangay" class="form-control" name="LastName" placeholder="Barangay: " style="margin-right: 10px;">
            <input type="text" class="form-control" name="subd" placeholder="Phase/Subdivision: ">
        </div>
        <div class="select_option form-group" style="display: flex;">
            <select name="country" class="form-select country form-control" aria-label="Default select example" onchange="loadStates()">
                <option disabled selected>Select Country</option>
            </select><br>
        </div>
        <div class="select_option form-group" style="display: flex;">
            <select style="margin-right: 10px;" name="province" class="form-select state form-control" aria-label="Default select example" onchange="loadCities()">
                <option disabled selected>Select Province</option>
            </select><br>
            <select name="city" class="form-select city form-control" aria-label="Default select example">
                <option disabled selected>Select City</option>
            </select>
        </div>
        <div class="select_option form-group" style="display: flex;">
            <input type="email" class="form-control" name="Email" placeholder="Email: " style="margin-right: 10px; width: 50%">
            <input id="phone" type="tel" name="phone" class="form-control" style="margin-right: 10px;"/>
            <script>
                const phoneInputField = document.querySelector("#phone");
                const phoneInput = window.intlTelInput(phoneInputField, {
                    utilsScript:
                    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                });
            </script>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Input Password: ">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password: ">
        </div>

        
        <div class="form-btn" style="display: flex; justify-content: center; align-items: center; margin-bottom: 10px; margin-top: 30px;">
            <input style="border-width:3px; width: 90px; padding: 10px 0; font-family: 'Rubik', sans-serif;" id="submit_btn" type="submit" class="btn btn-primary" name="submit" value="Register" placeholder="submit">
        </div>
    </form>
    <div style="text-align: center; margin-top:7px;"><p style="color:#F4DFC8"><a id="login_link" href="login.php" >Click here to login</a></p></div>
</div>
    </div>

    <script src="registration_script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>