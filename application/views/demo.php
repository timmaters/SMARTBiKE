<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
  <link href="http://localhost/smartbikes/SMARTBiKE/css/screen.css" rel="stylesheet" />
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700,inherit,400" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://localhost/smartbikes/SMARTBiKE/weatherapi/css/standardize.css">
  <link rel="stylesheet" href="http://localhost/smartbikes/SMARTBiKE/weatherapi/css/index.css">
  <script type ="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/hamburger-menu.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/weatherapi/js/weather.js"></script>

  <base href="http://localhost/smartbikes/SMARTBiKE/" />
</head>

<body>

  <div class="container-left">
    <div id="mobile">
      <div id="mobile-content">
        <div id="mobile-header">
          <div class="hamburger-icon"></div>
          <h1>SMARTBiKE</h1>
        </div>
        <div class="apps"><div id="weather"></div></div>
        <div class="apps">

          <?php
            foreach($songs as $song)
            {
            ?>
            <p>Song: <?php echo $song->song_title; ?></p>
              <audio controls>
                <source src="<?php echo $song->song_src; ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
            <?php
            }
          ?>
        </div>
        <div class="apps"></div>
        <div class="apps"></div>
        <div class="apps"></div>
        <div class="apps"></div>
      </div>

      <div id="hamburger-menu">
        <div id="mobile-header">
          <div class="hamburger-icon-return"></div>
          <h1>SMARTBiKE</h1>
        </div>
        <div class="button"><p>Beeld instellen</p></div>
        <div class="button"><p>Pech hulp</p></div>
        <div class="button"><p>Licht aan/uit</p></div>
        <div class="button"><p>Fiets afsluiten</p></div>
      </div>
    </div>
  </div>

  <div class="container-top-right">

  </div>
  <div class="container-bottom-right"></div>
</body>
</html>
