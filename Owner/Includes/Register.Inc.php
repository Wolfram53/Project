<?php

if (isset($_POST["submit"])) {

    $name=$_POST["name"];
    $email=$_POST["email"];
    $username=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $pwdagain=$_POST["pwdagain"];
    $phonenumber=$_POST["phonenumber"];
    $country=$_POST["country"];
    $postalcode=$_POST["postalcode"];
    $address=$_POST["address"];

    require_once 'Dbh.Inc.php';
    require_once 'Functions.Inc.php';
//
if(emptyInputSignup($name, $email, $username, $pwd, $pwdagain, $phonenumber, $country, $postalcode, $address) !==false){
    header("location: ../Register.php?error=emptyinput");
    exit();
}
//
if(invalidUid($username) !==false){
    header("location: ../Register.php?error=invaliduid");
    exit();
}
if(invalidEmail($email) !==false){
    header("location: ../Register.php?error=invalidemail");
    exit();
}
if(pwdMatch($pwd, $pwdagain) !==false){
    header("location: ../Register.php?error=passwordsdontmatch");
    exit();
}
if(uidExists($conn, $username, $email) !==false){
    header("location: ../Register.php?error=usernametaken");
    exit();
}

createUser($conn, $name, $email, $username, $pwd, $phonenumber, $country, $postalcode, $address);

}
else{
    header("location: ../Register.php");
    exit();
}