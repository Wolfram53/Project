<?php

if(isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'Dbh.Inc.php';
    require_once 'Functions.Inc.php';

    if(emptyInputLogin($username, $pwd) !==false){
        header("location: ../Login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../Login.php");
    exit();
}