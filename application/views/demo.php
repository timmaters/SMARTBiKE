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
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/mapfullscreen.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/light.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/key.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/heartbeat.js"></script>

  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/weatherapi/js/weather.js"></script>

  <base href="http://localhost/smartbikes/SMARTBiKE/" />


  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/weatherapi/js/weather.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/mapfullscreen.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/light.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/navigation.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/speed.js"></script>

  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/weatherapi/js/weather.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/mapfullscreen.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/light.js"></script>
  <script type="text/javascript" src="http://localhost/smartbikes/SMARTBiKE/js/pech-menu.js"></script>




</head>

<body>

  <div class="container-left">
    <a href="index.php" id="link-back"> Back </a>
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
            <h3>Your heartbeat:</h3>
            <h3 id="beat"><?php echo $heartbeat->beat; ?></h3>
            <h3 id="beat2"><?php echo $heartbeat->beat2; ?></h3>
            <h3 id="beat3"><?php echo $heartbeat->beat3; ?></h3>
          </div>
        </div>      
      </div>

      <div id="hamburger-menu">
        <div id="mobile-header">
          <div class="hamburger-icon-return"></div>
          <h1>SMARTBiKE</h1>
        </div>
        <!--<div class="button"><p>Beeld instellen</p></div>-->
        <div class="button" id="pech-button">
          <p>Roadside assistance</p>
        </div>
        <div class="button">
          <p id="light-on">Light on</p>
          <p id="light-off">light off</p>
        </div>
        <div class="button">
          <p id="Bclose">Close bike</p>
          <p id="Bopen">Open bike</p>
        </div>
      </div>

      <div id="pech-menu">
        <div id="mobile-header">
          <div class="hamburger-icon-return"></div>
          <h1>SMARTBiKE</h1>
        </div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1245.4180526582059!2d6.169704208357829!3d51.369309619401754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd94b0655a280e8b9!2sANWB+Winkel!5e0!3m2!1snl!2snl!4v1467278318327"
          width="100%"
          height="50%"
          frameborder="0"
          style="border:0">
        </iframe>
        <h3>ANWB Store - 5 minutes by bike</h3>
        <p style="border-bottom: 2px dotted;">Tel: 06 99 88 55 66</p>
        <h3>Piet - 9 minutes by bike</h3>
        <p style="border-bottom: 2px dotted;">Tel: 06 94 34 44 33</p>
        <h3>Berden - 12 minutes by bike</h3>
        <p style="border-bottom: 2px dotted;">Tel: 077 - 366 66 99</p>
        <h3>Joosten - 13 minutes by bike</h3>
        <p style="border-bottom: 2px dotted;">Tel: 06 94 12 55 26</p>
        <h3>ANWB Store Hertenstraat - 18 minutes by bike</h3>
        <p style="border-bottom: 2px dotted;">Tel: 06 99 88 55 66</p>
        <h3>Jaap - 25 minutes by bike</h3>
        <p style="border-bottom: 2px dotted;">Tel: 077 - 698 66 54</p>
      </div>
    </div>
  </div>

  <div class="container-top-right">
    <div id="screen">
      <div id="screen-content">
        <div class="screen-apps">
          <div id="weather-screen"></div>
        </div>
        <div class="screen-apps">
          <div class="song-playing">
            <p>Song is playing:</p>
            <p> <?php echo $songs[0]->song_title;  ?></p>
          </div>
        </div>
        <div class="screen-apps">
          <p> Eindbestemming: Von Flotowlaan || 4 KM</p>
          <h3 id="dir1"><?php echo $navigation_data->dir1; ?></h3>
          <h3 id="dir2"><?php echo $navigation_data->dir2; ?></h3>
          <h3 id="dir3"><?php echo $navigation_data->dir3; ?></h3>
          <h3 id="dir4"><?php echo $navigation_data->dir4; ?></h3>
          <h3 id="dir5"><?php echo $navigation_data->dir5; ?></h3>
          <h3 id="dir6"><?php echo $navigation_data->dir6; ?></h3>
          <h3 id="dir7"><?php echo $navigation_data->dir7; ?></h3>
          <h3 id="dir8"><?php echo $navigation_data->dir8; ?></h3>
          <h3 id="dir9"><?php echo $navigation_data->dir9; ?></h3>
        </div>
        <div class="screen-apps">
          <p> Uw snelheid is:</p>
          <h3 id="spd1"><?php echo $speed->spd1; ?></h3>
          <h3 id="spd2"><?php echo $speed->spd2; ?></h3>
          <h3 id="spd3"><?php echo $speed->spd3; ?></h3>
          <h3 id="spd4"><?php echo $speed->spd4; ?></h3>
          <h3 id="spd5"><?php echo $speed->spd5; ?></h3>
          <h3 id="spd6"><?php echo $speed->spd6; ?></h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container-bottom-right">
    <img id="open" src="img/key-open.png">
    <img id="close" src="img/key-closed.png">
    <img id="light" src="img/fiets-licht.png">
    <img id="dark" src="img/fiets-donker.png">

  </div>
</body>
</html>
