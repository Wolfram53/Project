<?php

$severName="localhost";
$dBUserName="root";
$dBPassword="";
$dBName="szallasok";

$conn= mysqli_connect($severName, $dBUserName, $dBPassword, $dBName);

if(!$conn){
    die("Kapcsolat megszakadt: " . mysqli_connect_error());
}