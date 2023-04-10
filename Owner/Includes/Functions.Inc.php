<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdagain, $phonenumber, $country, $postalcode, $address){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdagain) || empty($phonenumber) || empty($country) || empty($postalcode) || empty($address)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdagain){
    $result;
    if($pwd!==$pwdagain){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql="SELECT * FROM kiadók WHERE kiadoUid = ? OR kiadoEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Owner/Register.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd, $phonenumber, $country, $postalcode, $address){
    $sql="INSERT INTO kiadók (kiadoName, kiadoEmail, kiadoUid, kiadoPwd, kiadoPhoneNumber, kiadoCountry, kiadoPostalCode, kiadoAddress) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Register.php?error=stmtfailed");
        exit();
    }

    $unhashedPwd = $pwd;
    $hashedPwd=password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $email, $username, $hashedPwd, $phonenumber, $country, $postalcode, $address);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Display the unhashed password on the website
    echo "Your password is: " . $unhashedPwd;

    header("location: ../Register.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result;
    if(empty($username) || empty($pwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists == false) {
        header("location: ../Login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["kiadoPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        header("location: ../Login.php?error=wronglogin");
        exit();
    }
    else if($checkPwd===true) {
        session_start();
        $_SESSION["userid"] = $uidExists["userId"];
        $_SESSION["useruid"] = $uidExists["userUid"];
        header("location: ../Home.php");
        exit();
    }
}