<?php

    $hostName = "localHost";
    $dbUser = "id21957742_root";
    $dbPassword = "Mamamo@26";
    $dbName = "id21957742_user";
    $conn = "mysqli_connect"($hostName, $dbUser, $dbPassword, $dbName);
    if (!$conn) {
        die("Something went wrong.");
    }

?>