<?php
  require_once("../../include/app.php"); 
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php $pagetitle='SV Werder Bremen - Gewinnspiel'; require_once("../../include/head.php"); ?>
<meta name="description" content="Gewinne Karten für die Heimspiele vom SV Werder Bremen">
<script>
    $(document).ready(function() {
      $("#slider").owlCarousel({

      navigation : false,
      slideSpeed : 600,
      paginationSpeed : 400,
      singleItem : true,
	  pagination: true,
	  autoHeight: false,
	  autoPlay: 15000

      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

      });
    });
    </script>
</head>
<body class="maintheme">
<?php require_once('../../include/alterscheck.php');?>
<div class="grid margtop">
<div class="grid-m1"></div>
<div class="grid-c1">
  <div class="navigation-wrapper">
    <?php require_once("../../include/navigation.php"); ?>
    <?php require_once("../../include/socialbar.php"); ?>
  </div>
</div>
<div class="grid-m2"></div>
<div class="grid-full">
  <div class="fullteaser backgroundfull">
    <div class="teaser_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
    <div class="teaserinner">
      <div id="slider" class="owl-carousel">
        <div>
          <h1 class="margin30">HAAKE-BECK<br>
            SV Werder Bremen - Gewinnspiel </h1>
          <div class="trennline linefirst"></div>
          <a href="#"><img src="/images/visuals/haake-beck-es-war-einmal.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
          <div class="trennline linelast"></div>
          <h2 class="yellow">Gewinne Karten für die Heimspiele vom SV Werder Bremen</h2>
          <p class="center">Du bist ein waschechter Fan vom SV Werder Bremen und Haake-Beck? Dann bist du hier genau richtig!<br>
            <bR>
            Denn wir verlosen passend zum Start der neuen Bundesliga Saison zu fast jedem Heimspiel vom SV Werder Bremen 2x2 Tickets für das jeweilige Spiel in der Haake-Beck Fankurve, ein VIP Bereich im Weserstadion. <br><br> Mit freundlicher Unterstützung von<br>
        <br>
        <a class="regular" target="_blank" href="http://www.werder.de/">www.werder.de</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">Gewinnspiel</h2>
      <p class="center">Was du dafür tun musst? Beantworte einfach unsere Gewinnspielfrage zum SV Werder Bremen oder zu Haake-Beck, trage deine Daten ein und schon hast du die Chance auf die Tickets. Die Gewinnspiele starten immer in der Woche vor dem Heimspiel. Die Gewinner werden montags gezogen und dann direkt von uns informiert. Wir wünschen euch viel Erfolg! <br>
        <br>
        An folgenden Terminen starten unsere Gewinnspiele:
      </p>
    </div>
  </div>
 <?php /*?> <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">29.08.2016</h2>
      <p class="center">Für das Spiel am 11.09.2016 SV Werder Bremen vs. FC Augsburg<br>
        <br>
        <a class="regular" href="2016-08-29/">zu den Gewinnern</a></p>
    </div>
  </div><?php */?>
 <?php /*?> <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">05.09.2016</h2>
      <p class="center">Für das Spiel am 21.09.2016 SV Werder Bremen vs 1.FSV Mainz 05<br>
        <br>
        <a class="regular" href="2016-09-05/">zu den Gewinnern</a></p>
    </div>
  </div><?php */?>
<?php /*?>  <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">12.09.2016</h2>
      <p class="center">Für das Spiel am 24.09.2016 SV Werder Bremen vs. VfL Wolfsburg<br>
        <br>
        <a class="regular" href="2016-09-12/">zu den Gewinnern</a></p>
    </div>
  </div><?php */?>
  <?php /*?><div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">03.10.2016</h2>
      <p class="center">Für das Spiel am 14.-16.10.2016 SV Werder Bremen vs. Bayer 04 Leverkusen
       <br><br><a class="regular" href="2016-10-03/">zu den Gewinnern</a>
      </p>
    </div>
  </div><?php */?>
  <?php /*?><div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">21.11.2016</h2>
      <p class="center">Für das Spiel am 02.-04.12.2016 SV Werder Bremen vs. FC Ingolstadt<br>
        <br>
        <a class="regular" href="2016-11-21/">zu den Gewinnern</a></p>
    </div>
  </div><?php */?>
  <?php /*?><div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">09.01.2017</h2>
      <p class="center">Für das Spiel am 20.-22.01.2017 SV Werder Bremen vs. Borussia Dortmund<br>
        <br>
        <a class="regular" href="2017-01-09/">zu den Gewinnern</a></p>
    </div>
  </div><?php */?>
  <?php /*?><div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">16.01.2017</h2>
      <p class="center">Für das Spiel am 27.-29.01.2017 SV Werder Bremen vs. FC Bayern München<br>
        <br>
        <a class="regular" href="2017-01-16/">zu den Gewinnern</a></p>
    </div>
  </div><?php */?>
 
 <?php /*?> <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">20.02.2017</h2>
      <p class="center">Für das Spiel am 03.-05.03.2017 SV Werder Bremen vs. Darmstadt 98<br>
        <br>
        <a class="regular" href="2017-02-20/">zu den Gewinnern</a></p>
    </div>
  </div><?php */?>
 <?php /*?> <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">06.03.2017</h2>
      <p class="center">Für das Spiel am 17.-19.03.2017 SV Werder Bremen vs. RB Leipzig<br>
        <br>
        <a class="regular" href="2017-03-06/">zu den Gewinnern</a></p>
    </div>
  </div><?php */?>
  

 <?php /*?> <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">17.04.2017 </h2>
      <p class="center">Für das Spiel am 29.-31.04.2017 SV Werder Bremen vs. Hertha BSC<br>
        <br>
        <a class="regular" href="2017-04-17/">zu den Gewinnern</a></p>
    </div>
  </div><?php */?>
  <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">01.05.2017</h2>

      <p class="center">Für das Spiel am 13.-15.05.2017 SV Werder Bremen vs. TSG 1899 Hoffenheim<br><br>
        <a class="regular" href="2017-05-01/">zu den Gewinnern</a>
      </p>
    </div>
  </div>
  
 <div class="clear"></div>
 <?php require_once("../../include/kader.php"); ?>
 <div class="clear"></div>
  <?php require_once("../../include/footer.php"); ?>
</div>
<div class="grid-m4"></div>
<div class="grid-c4">
  <?php $product = 'Pils'; require_once("../../include/sidebar.php"); ?>
</div>
<?php require_once("../../include/js.php"); ?>
</body>
</html>
