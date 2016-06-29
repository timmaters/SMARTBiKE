<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
  <link href="http://localhost/SMARTBiKE/css/screen.css" rel="stylesheet" />
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700,inherit,400" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://localhost/SMARTBiKE/weatherapi/css/standardize.css">
  <link rel="stylesheet" href="http://localhost/SMARTBiKE/weatherapi/css/index.css">
  <script type ="text/javascript" src="http://localhost/SMARTBiKE/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="http://localhost/SMARTBiKE/js/hamburger-menu.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>
<<<<<<< HEAD
  <script type="text/javascript" src="http://localhost/SMARTBiKE/weatherapi/js/weather.js"></script>

  <base href="http://localhost/SMARTBiKE/" />
=======
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/weatherapi/js/weather.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/mapfullscreen.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/light.js"></script>
  <base href="http://localhost/smartbikes/SMARTBiKE/" />
>>>>>>> be2cc6be2ed84169397eb1f531c2e1c0c240e59a
</head>

<body>

  <div class="container-left">
    <div id="mobile">
      <div id="mobile-content">
        <div id="mobile-header">
          <div class="hamburger-icon"></div>
          <h1>SMARTBiKE</h1>
        </div>

        <div id="mapfullscreen">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9191.205684423556!2d6.1228586132664375!3d51.338157558480795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c74feeb3dddc5d%3A0xbcbda899d2ef0e88!2sKloosterstraat+28A%2C+5935+CB+Steyl!5e1!3m2!1snl!2snl!4v1389894449412"
            width="98%"
            height="450vw"
            frameborder="0"
            style="border:0">
          </iframe>
          <p id="closefullscreen">Click to close fullscreen</p>
        </div>

        <!-- app1 -->
        <div class="apps"><div id="weather"></div></div>

        <!-- app2 -->
        <div class="apps">
          <?php
            foreach($songs as $song)
            {
            ?>
            <div class="regel">
            <p>Song: <?php echo $song->song_title; ?></p>
              <audio controls>
                <source class="song" src="<?php echo $song->song_src; ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            </div>
            <?php
            }
          ?>
        </div>

        <!-- app3 -->
        <div class="apps">
          <div id="overlay"></div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9191.205684423556!2d6.1228586132664375!3d51.338157558480795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c74feeb3dddc5d%3A0xbcbda899d2ef0e88!2sKloosterstraat+28A%2C+5935+CB+Steyl!5e1!3m2!1snl!2snl!4v1389894449412"
              width="100%"
              height="100%"
              frameborder="0"
              style="border:0">
            </iframe>
        </div>

        <!-- app4 -->
        <div class="apps">

          <div class="heartbeat">
            <img id="heart" src="img/heart.jpg" width="100%" >
            <h3>Your heartbeat:</h3>
            <h3><?php echo $heartbeat->beat; ?></h3>
          </div>
        </div>

        <!-- app5 -->
        <div class="apps"></div>

        <!-- app6 -->
        <div class="apps"></div>
      </div>

      <div id="hamburger-menu">
        <div id="mobile-header">
          <div class="hamburger-icon-return"></div>
          <h1>SMARTBiKE</h1>
        </div>
        <!--<div class="button"><p>Beeld instellen</p></div>-->
        <!--<div class="button" id="location"><p>Pech hulp</p></div>-->
        <div class="button">
          <p id="light-on">Light on</p>
          <p id="light-off">light off</p>
        </div>
        <div class="button"><p>Close bike</p></div>
      </div>
    </div>
  </div>

  <div class="container-top-right">

  </div>
  <div class="container-bottom-right">
    <img id="light" src="img/fiets-licht.png">
    <img id="dark" src="img/fiets-donker.png">
  </div>
</body>
</html>
