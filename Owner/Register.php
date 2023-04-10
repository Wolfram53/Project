<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Regisztráció</title>
</head>
<body>
<form action="Includes/Register.Inc.php" method="post">
<div class="box">
    <div class="form">
<h2>Regisztráció(Kiadóknak)</h2>
<div class="inputBox">
    <input type="text" name="name" required="required">
    <span>Teljes Név</span>
    <i></i>
    </div>
    <div class="inputBox">
        <input type="text" name="email" required="required">
        <span>E-mail</span>
        <i></i>
        </div>
        <div class="inputBox">
        <input type="text" name="uid" required="required">
        <span>Felhasználónév</span>
        <i></i>
        </div>
        <div class="inputBox">
        <input type="text" name="phonenumber" required="required">
        <span>Telefonszám</span>
        <i></i>
        </div>
        <div class="inputBox">
        <input type="text" name="country" required="required">
        <span>Ország</span>
        <i></i>
        </div>
        <div class="inputBox">
        <input type="text" name="postalcode" required="required">
        <span>Irányítószám</span>
        <i></i>
        </div>
        <div class="inputBox">
        <input type="text" name="address" required="required">
        <span>Cím</span>
        <i></i>
        </div>
    <div class="inputBox">
        <input type="password" required="required" id="password" name="pwd">
        <span>Jelszó</span>
        <i></i>
        </div>
        <div class="inputBox">
            <input type="password" required="required" id="passwordagain" name="pwdagain">
            <span>Jelszó újra</span>
            <i></i>
</div>
<label>
    <input type="checkbox" onclick="passwordhide()">Jelszó megjelenítése
    </label>
<input type="submit" name="submit" value="Regisztráció">
<div class="links">
    <a href="Login.php">Bejelentkezés</a>
    <a href="../User/Register.php">Regisztráció(Vendégeknek)</a>
</form>
</div>
<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p style='color:red'>Kérjük, töltse ki az összes mezőt!</p>";
        }
        else if($_GET["error"] == "invaliduid"){
            echo "<p style='color:red'>A felhasználónév hibás karaktereket tartalmaz(!$%&'()*+,-./:;<=>?@) !</p>";
        }
        else if($_GET["error"] == "invalidemail"){
            echo "<p style='color:red'>Kérjük, válasz egy rendes email-t!</p>";
        }
        else if($_GET["error"] == "passwordsdontmatch"){
            echo "<p style='color:red'>Jelszók nem egyeznek meg!</p>";
        }
        else if($_GET["error"] == "stmtfailed"){
            echo "<p style='color:red'>Valami elromlott, próbálkozz újra!</p>";
        }
        else if($_GET["error"] == "usernametaken"){
            echo "<p style='color:red'>Felhasználónév már foglalt!</p>";
        }
        else if($_GET["error"] == "none"){
            echo "<p style='color:green'>Regisztráció sikeres!</p>";
        }
    }
 ?>
</div>
</div>
</body>
</html>
<script src="function.js"></script>