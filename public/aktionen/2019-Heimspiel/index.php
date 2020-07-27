<?php require_once "../../include/app.php"; ?>
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
          <a href="#"><img src="/images/visuals/haake-beck-heimspiel.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
          <div class="trennline linelast"></div>
          <h2 class="yellow">Liebe Haake-Beck Freunde,</h2>
          <p class="center">
 
diese außergewöhnliche Situation erfordert aktuell außergewöhnliche Maßnahmen. Dabei hat Eure Sicherheit die größte Priorität. Solange die Bundesliga nun pausiert wird, können wir unsere Haake-Beck Gewinnspiele für die Werder Bremen Heimspiele im Weserstadion leider nicht mehr anbieten. Daher haben wir dies vorerst von unserer Website entfernt.</p><p class="center">
 
Bleibt gesund und vielen Dank für das Verständnis –<br>
Euer Haake-Beck Team</p>
        </div>
          </div>
    </div>
      </div>
  <?php /*?><div class="fullteaser backgroundfull">
        <div class="teaserinner">
      <h2 class="yellow">Gewinnspiel</h2>
      <p class="center">Was du dafür tun musst? Beantworte einfach unsere Gewinnspielfrage zum SV Werder Bremen oder zu Haake-Beck, trage deine Daten ein und schon hast du die Chance auf die Tickets. Die Gewinnspiele haben immer eine Laufzeit von zwei Wochen. Die Gewinner werden eine Woche vor dem Spiel gezogen und dann direkt von uns informiert. Wir wünschen euch viel Erfolg! <br>
            <br>
            An folgenden Terminen starten unsere Gewinnspiele: </p>
    </div>
      </div><?php */?>
  
        <?php /*?> <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">20.02.2020</h2>
      <p class="center">Für das Spiel am 14.03.2020 Werder Bremen – Bayer 04 Leverkusen<br>
        <br>
        <strong>Das Gewinnspiel ist beendet. Gewonnen haben: </strong><br>Inke M. aus Ganderkesee<br>
Joachim H. aus Itzehoe</p>
    </div>
  </div>
         <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">09.03.2020</h2>
      <p class="center">Für das Spiel am 04.04.2020 Werder Bremen – Bor. Mönchengladbach<br>
        <br>
        <a class="regular" href="2020-04-04/">zum Gewinnspiel</a></p>
    </div>
  </div>
         <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">25.03.2020</h2>
      <p class="center">Für das Spiel am 18.04.2020 Werder Bremen – VfL Wolfsburg<br>
        <br>
        <a class="regular" href="2020-04-18/">zum Gewinnspiel</a></p>
    </div>
  </div>
         <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">08.04.2020</h2>
      <p class="center">Für das Spiel am 02.05.2020 Werder Bremen – Bayern München<br>
        <br>
        <a class="regular" href="2020-05-02/">zum Gewinnspiel</a></p>
    </div>
  </div>
         <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">22.04.2020</h2>
      <p class="center">Für das Spiel am 16.05.2020 Werder Bremen – 1. FC Köln<br>
        <br>
        <a class="regular" href="2020-05-16/">zum Gewinnspiel</a></p>
    </div>
  </div><?php */?>
  
  
  
  
  <div class="clear"></div>
  <?php require_once("../../include/kader.php"); ?>
  <div class="clear"></div>
  <?php require_once("../../include/footer.php"); ?>
</div>
    <div class="grid-m4"></div>
    <div class="grid-c4">
  <?php $product = '12'; require_once("../../include/sidebar.php"); ?>
</div>
    <?php require_once("../../include/js.php"); ?>
    </body>
</html>
