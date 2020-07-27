<?php
  require_once("../../include/app.php"); 
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php $pagetitle='Weihnachtsgewinnspiel'; require_once("../../include/head.php"); ?>
<meta name="description" content="Gewinne Karten für die SIXDAYS in Bremen">
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
          <h1 class="margin30">HAAKE-BECK<br>
            Weihnachtsgewinnspiel </h1>
                                <div class="trennline linefirst"></div>
                                <a href="#"><img src="/images/visuals/weihnachten-3.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
                                <div class="trennline linelast"></div>
                                <h2 class="yellow">Gewinne Tickets für die 54. SIXDAYS BREMEN</h2>
                                
                                    <p class="center">Vom 11. – 16. Januar 2018 verwandelt das Bremer 6-Tage-Rennen die Hansestadt in ein Mekka für Radsportbegeisterte und Partyfreunde. Passend dazu verlosen wir 3x2 Tickets für den Renn-Samstag. Willst Du Dir und Deiner Begleitperson die Chance auf die begehrten Plätze sichern? Dann mach mit bei unserem Weihnachtsgewinnspiel!<br><br> 
        <a class="regular" href="http://sixdaysbremen.de/" target="_blank">Alle Infos zu den SIXDAYS</a></p><br><p class="center"><strong>Das Gewinnspiel ist beendet. Die Gewinner werden Anfang Januar 2018 bekannt gegeben</strong>  </p>
    </div>
    </div>
  </div>
  <div class="clear"></div>
  

  
  <div class="clear"></div>
 
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
