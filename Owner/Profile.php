<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.Profile.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Kezdőoldal</title>
</head>
<body>
<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <img src="logo.png" class="logo" alt="logo" title="logo">
    <ul>
        <li><a href="Home.php">Kezdőoldal</a></li>
        <li><a class="active" href="Profile.php">Profil</a></li>
        <li><a href="#">Szolgáltatások</a></li>
        <li><a href='includes/Logout.Inc.php'>Kijelentkezés</a></li>
    </ul>
</nav>
<div class="box">
<label><h1>Kiadó Adatok:</h1></label>
<?php
$severName="localhost";
$dBUserName="root";
$dBPassword="";
$dBName="szallasok";
$conn= mysqli_connect($severName, $dBUserName, $dBPassword, $dBName);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the new values for KiadoName and KiadoEmail from the form
    $newKiadoName = $_POST['newKiadoName'];
    $newKiadoEmail = $_POST['newKiadoEmail'];
    $newKiadoUid = $_POST['newKiadoUid'];
    $newKiadoPhoneNumber = $_POST['newKiadoPhoneNumber'];
    $newKiadoCountry = $_POST['newKiadoCountry'];
    $newKiadoPostalCode = $_POST['newKiadoPostalCode'];
    $newKiadoAddress = $_POST['newKiadoAddress'];

    // Check if the password field is not empty
    if (isset($_POST['newKiadoPwd'])) {
        // Get the new password and hash it
        $newKiadoPwd = password_hash($_POST['newKiadoPwd'], PASSWORD_DEFAULT);
        // Update the KiadoPwd in the database
        $updateQuery = "UPDATE kiadók SET kiadoName = '$newKiadoName', kiadoEmail = '$newKiadoEmail', kiadoUid = '$newKiadoUid', kiadoPwd = '$newKiadoPwd', kiadoPhoneNumber = '$newKiadoPhoneNumber', kiadoCountry = '$newKiadoCountry', kiadoPostalCode = '$newKiadoPostalCode', kiadoAddress = '$newKiadoAddress'";
    } else {
        // Update the other fields without changing the password
        $updateQuery = "UPDATE kiadók SET kiadoName = '$newKiadoName', kiadoEmail = '$newKiadoEmail', kiadoUid = '$newKiadoUid', kiadoPhoneNumber = '$newKiadoPhoneNumber', kiadoCountry = '$newKiadoCountry', kiadoPostalCode = '$newKiadoPostalCode', kiadoAddress = '$newKiadoAddress'";
    }
    $conn->query($updateQuery);
}

$query = "SELECT kiadoName, kiadoEmail, kiadoUid, kiadoPwd, kiadoPhoneNumber, kiadoCountry, kiadoPostalCode, kiadoAddress FROM kiadók;";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Verify the password and show the unhashed version if it matches
        if (isset($_POST['newKiadoPwd']) && password_verify($_POST['newKiadoPwd'], $row['kiadoPwd'])) {
            $unhashedPwd = $_POST['newKiadoPwd'];
        } else {
            $unhashedPwd = "**********";
        }
        echo "<p style='color: rgb(247, 243, 5);'><span style='font-size: 24px; display: inline-block; width: 450px;'>Teljes Név:</span> <span class='username' style='display: inline-block; text-align: right;'>".$row['kiadoName']."</span><br><span style='font-size: 24px; display: inline-block; width: 450px;'>Email:</span> <span class='username' style='display: inline-block; text-align: right;'>".$row['kiadoEmail']." </span><br><span style='font-size: 24px; display: inline-block; width: 450px;'>Felhasználónév:</span> <span class='username' style='display: inline-block; text-align: right;'>".$row['kiadoUid']." </span><br><span style='font-size: 24px; display: inline-block; width: 450px;'>Jelszó:</span> <span class='username' style='display: inline-block; text-align: right;'>".$unhashedPwd." </span><br><span style='font-size: 24px; display: inline-block; width: 450px;'>Telefonszám:</span> <span class='username' style='display: inline-block; text-align: right;'>".$row['kiadoPhoneNumber']." </span><br><span style='font-size: 24px; display: inline-block; width: 450px;'>Ország:</span> <span class='username' style='display: inline-block; text-align: right;'>".$row['kiadoCountry']." </span><br><span style='font-size: 24px; display: inline-block; width: 450px;'>Irányítószám:</span> <span class='username' style='display: inline-block; text-align: right;'>".$row['kiadoPostalCode']." </span><br><span style='font-size: 24px; display: inline-block; width: 450px;'>Cím:</span> <span class='username' style='display: inline-block; text-align: right;'>".$row['kiadoAddress']."</span></p>";
    }
}
else {
    echo "Nincs adat";
}

$conn->close();
?>
<!-- HTML form for user input -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <br>
    <label><h2>Adatok megváltoztatása:</h2></label>
    <label for="newKiadoName">Teljes Név:</label>
    <input type="text" name="newKiadoName" id="newKiadoName" required="required">
    <br>
    <label for="newKiadoEmail">Email:</label>
    <input type="email" name="newKiadoEmail" id="newKiadoEmail" required="required">
    <br>
    <label for="newKiadoUid">Felhasználónév:</label>
    <input type="text" name="newKiadoUid" id="newKiadoUid" required="required">
    <br>
    <label for="newKiadoPwd">Jelszó:</label>
    <input type="password" name="newKiadoPwd" id="newKiadoPwd" required="required">
    <br>
    <label for="newKiadoPhoneNumber">Telefonszám:</label>
    <input type="text" name="newKiadoPhoneNumber" id="newKiadoPhoneNumber" required="required">
    <br>
    <label for="newKiadoCountry">Ország:</label>
    <input type="text" name="newKiadoCountry" id="newKiadoCountry" required="required">
    <br>
    <label for="newKiadoPostalCode">Irányítószám:</label>
    <input type="text" name="newKiadoPostalCode" id="newKiadoPostalCode" required="required">
    <br>
    <label for="newKiadoAddress">Cím:</label>
    <input type="text" name="newKiadoAddress" id="newKiadoAddress" required="required">
    <br>
    <input type="submit" value="Frissítés">
</form>
</div>
</body>
</html>