<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.Home.css">
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
        <li><a class="active" href="Home.php">Kezdőoldal</a></li>
        <li><a href="Profile.php">Profil</a></li>
        <li><a href="#">Szolgáltatások</a></li>
        <li><a href='includes/Logout.Inc.php'>Kijelentkezés</a></li>
    </ul>
</nav>
<section id="home">
    <div class="hero">
      <h1>Üdvözöljük a Siófoki Szállások Weboldalon</h1>
      <p>Ahol a vendég az első</p>
      <a href="#rooms" class="cta">Foglalj Most</a>
    </div>
  </section>
  <section id="rooms">
    <div class="accommodation-options">
      <h2>Szálláslehetőségek</h2>
    <ul>
        <li>
          <img src="Szallastipusok/Hotel.jpg" alt="Hotel" Title="Hotel">
          <h3>Hotel</h3>
          <p>Kényelmi szolgáltatásokkal, szobákkal, étkezéssel és szabadidős lehetőségekkel.</p>
        </li>
        <li>
        <img src="Szallastipusok/Apartman.jpg" alt="Apartman" Title="Apartman">
          <h3>Apartman</h3>
          <p>Önálló lakóegység, konyhával, fürdőszobával és hálószobával, gyakran rövid vagy hosszú távú tartózkodásra.</p>
        </li>
        <li>
        <img src="Szallastipusok/Vendégház.jpg" alt="Vendégház" Title="Vendégház">
          <h3>Vendégház</h3>
          <p>Egy kis szálláshely, gyakran egy lakóépületben vagy vidéki környezetben, kényelmi szolgáltatásokkal.</p>
        </li>
    </ul>
    <ul>
        <li>
        <img src="Szallastipusok/Panzió.jpg" alt="Panzió" Title="Panzió">
          <h3>Panzió</h3>
          <p>Kis, egyszerű szálláshely, gyakran családi vállalkozásként működik, alapvető szolgáltatásokkal.</p>
        </li>
        <li>
        <img src="Szallastipusok/Faház.jpg" alt="Faház" Title="Faház">
          <h3>Faház</h3>
          <p>Kisebb fából készült szálláshely természetközeli környezetben.</p>
        </li>
        <li>
        <img src="Szallastipusok/Vendégfogadó.jpg" alt="Vendégfogadó" Title="Vendégfogadó">
          <h3>Vendégfogadó</h3>
          <p>Vendégeket fogad, és szolgáltatásokat nyújt, például szállást, étkezést és egyéb vendéglátóipari szolgáltatásokat.</p>
        </li>
    </ul>
    <ul>
        <li>
        <img src="Szallastipusok/Üdülőház.jpg" alt="Üdülőház" Title="Üdülőház">
          <h3>Üdülőház</h3>
          <p>Szálláshely az ideiglenes pihenésre és kikapcsolódásra szolgáló épületben vagy ingatlanon.</p>
        </li>
        <li>
        <img src="Szallastipusok/Motel.jpg" alt="Motel" Title="Motel">
          <h3>Motel</h3>
          <p>Az autós turizmusra szakosodott szálláshely, amely könnyű hozzáférést és parkolási lehetőséget biztosít az autós utazók számára, általában az utak közelében található.</p>
        </li>
        <li>
        <img src="Szallastipusok/Hostel.jpg" alt="Hostel" Title="Hostel">
          <h3>Hostel</h3>
          <p>Olcsó, közösségi szálláshely általában egyszerű szobákkal vagy ágyakkal, közös helyiségekkel, mint konyhák, társalgók vagy közös fürdőszobák.</p>
        </li>
    </ul>
    <ul>
        <li>
        <img src="Szallastipusok/Diákszálló.jpg" alt="Diákszálló" Title="Diákszálló">
          <h3>Diákszálló</h3>
          <p>Tanulók számára nyújtott szálláshely oktatási célból, általában közösségi helyiségekkel és szobákkal.</p>
        </li>
        <li>
        <img src="Szallastipusok/Villa.jpg" alt="Villa" Title="Villa">
          <h3>Villa</h3>
          <p>Egy nagyobb, kényelmes otthon vagy rezidencia, amely luxus életstílust és magas életminőséget kínál.</p>
        </li>
        <li>
        <img src="Szallastipusok/Világítótorony.jpg" alt="Világítótorony" Title="Világítótorony">
          <h3>Világítótorony</h3>
          <p>Olyan különleges szálláslehetőség, amely a világítótorony épületében található, és általában lenyűgöző kilátást biztosít a környező tájra vagy tengerre.</p>
        </li>
      </ul>
    </div>
  </section>
  <section id="amenities">
    <div class="amenities">
      <h2>Szolgáltatásaink</h2>
      <ul>
        <li>Free Wi-Fi</li>
      </ul>
    </div>
  </section>
  <section id="location">
    <div class="location">
        <h2>Elhelyezkedésünk</h2>
        <p>Szálláshelyeink a város szívében találhatók, pár percre a népszerű látnivalóktól és a közlekedéstől.</p>
        <!-- Replace the following div with the Google Maps embed code -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26974.17517138483!2d18.002040840925875!3d46.89528734400695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4769c0c1d19f524f%3A0xb066d0df5c3768d8!2sSi%C3%B3fok!5e0!3m2!1sen!2shu!4v1649030544266!5m2!1sen!2shu" width="50%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>
  <section id="contact">
    <div class="contact">
      <h2>Lépjen kapcsolatba velünk</h2>
      <p>Ha kérdése van, vagy foglalni szeretne, forduljon hozzánk bizalommal.</p>
      <form action="contact.php" method="post">
        <textarea name="message" placeholder="Üzenete   "></textarea>
        <input type="submit" value="Küldés">
      </form>
    </div>
  </section>
  <footer>
    <p>&copy; 2023 Siófoki Szállások Weboldal. Minden jog fenntartva.</p>
  </footer>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
  <script>
    function initMap() {
        // Replace the following coordinates with the desired location
        var coordinates = { lat: 46.8952873, lng: 18.0020408 };

        // Create a map object and center it on the specified coordinates
        var map = new google.maps.Map(document.getElementById('google-map'), {
            center: coordinates,
            zoom: 12
        });

        // Create a marker and place it on the map
        var marker = new google.maps.Marker({
            position: coordinates,
            map: map,
            title: 'Our Location'
        });
    }
</script>
</body>
</html>