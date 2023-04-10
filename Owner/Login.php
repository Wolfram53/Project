<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Bejelentkezés</title>
</head>
<body>
<form action="Includes/Login.Inc.php" method="post">
<div class="box">
    <div class="form">
<h2>Bejelentkezés</h2>
<div class="inputBox">
    <input type="text" name="uid" required="required">
    <span>Felhasználónév/E-mail</span>
    <i></i>
    </div>
    <div class="inputBox">
        <input type="password" required="required" id="password" name="pwd">
        <span>Jelszó</span>
        <i></i>
</div>
<label>
    <input type="checkbox" onclick="passwordhide()">Jelszó megjelenítése
    </label>
<input type="submit" name="submit" value="Bejelentkezés">
<div class="links">
    <a href="#">Elfelejtett Jelszó</a>
    <a href="Register.php">Regisztráció</a>
</div>
<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p style='color:red'>Kérjük, töltse ki az összes mezőt!</p>";
        }
        else if($_GET["error"] == "wronglogin"){
            echo "<p style='color:red'>Téves bejelentkezési adatok!</p>";
        }
    }
 ?>
</div>
</div>
</form>
</body>
</html>
<script src="function.js"></script>
