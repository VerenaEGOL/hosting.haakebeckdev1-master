<?php
  require_once("../../include/app.php"); 
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php $pagetitle='SIXDAYS BREMEN'; require_once("../../include/head.php"); ?>
<meta name="description" content="#">
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
    
      <div>
          <h1 class="margin30">HAAKE-BECK präsentiert <br>
            die SIXDAYS BREMEN</h1>
        <div class="trennline linefirst"></div>
        <img src="/images/visuals/sixdays.gif" class="visual" title="" alt="HAAKEBECK" />
        <div class="trennline linelast"></div>
          <h2 class="yellow">Spitzensport trifft auf Show und Party</h2>
          <p class="center">
Der Countdown für die 53. SIXDAYS BREMEN läuft
 </p>
       
      </div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h3 class="marginbottom margintop">Eine Runde mit Haake-Beck, bitte!</h3>
     
    <p class="center">Die SIXDAYS BREMEN sind nicht nur für Fans des Radsports ein Highlight im jährlichen Veranstaltungskalender. Das Bremer 6-Tage-Rennen gilt als internationales Event mit Tradition und verwandelt vom 12. – 17. Januar 2017 die Hansestadt wieder in ein Mekka für Radsportbegeisterte und Partyfreunde. Neben der ÖVB-Arena auf der Bürgerweide stehen für dieses Kult-Event auch die Hallen 2, 3, 4 und 4.1 zur Verfügung. <br><br> Neben den 12 Profi-Mannschaften mit je zwei Fahrern pro Team, sorgen auch die Sprinter, Frauen,
Nachwuchsfahrer und Paracycler für Tempo, hochklassigen Sport und ausgelassene
Stimmung in der ÖVB-Arena. Und auch Hobbyfahrer können wieder ihr Können beim
Jedermannrennen unter Beweis stellen.<br><br> 
    
Für Unterhaltung abseits
der Rennstrecke sorgen dieses Jahr Live-Acts, wie Mickie Krause
und Peter Wackel, die mit ihren Partyschlagern der Menge einheizen, sowie und DJs, wie DJ Tobi Meisner und DJ Toddy, die die Tanzfläche zum Brodeln bringen.<br><br>Die 53. SIXDAYS BREMEN finden von Donnerstag bis Dienstag, 12. bis 17. Januar 2017 statt.<br><br> Weitere Informationen gibt es unter:

   <br /><br /></p>
      <p class="center"> 
        <a class="regular" href="http://sixdaysbremen.de/" target="_blank">www.sixdaysbremen.de</a></p>
    </div>
  </div>

  
  <div class="clear"></div>
  <?php require_once("../../include/weihnachten.php"); ?>
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
