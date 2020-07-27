<?php
require_once("../../include/app.php");
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <?php $pagetitle='Qualität'; require_once("../../include/head.php"); ?>
    <meta name="description" content="#">
    <script>
    $(document).ready(function() {
      $("#slider").owlCarousel({

      navigation : true,
      slideSpeed : 600,
      paginationSpeed : 400,
      singleItem : true,
    pagination: false,
    autoHeight: false,
    autoPlay: false,
    

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
      
      
      
     
       <h1 class="margin30">Echt Qualität:<br> Haake-Beck</h1>
          <div class="trennline linefirst"></div>
          <img src="/images/visuals/qualitaet.jpg" class="visual" title="" alt="HAAKEBECK Qualität" />
          <div class="trennline linelast"></div>
          <h2 class="yellow alignleft marginleft marginright">Haake-Beck zu trinken bedeutet, Qualität zu genießen.</h2>
          <p class="alignleft marginleft marginright marginbottomhalf">Um den <strong>erstklassigen Geschmack</strong> eines frischen Haake-Beck zu gewährleisten, verwenden wir ausschließlich <strong>hochwertige Rohstoffe</strong>. Permanente Qualitätssicherung ist bei uns selbstverständlich. Unsere erfahrenen Brauer brauen sorgfältig gemäß den überlieferten Rezepten und natürlich streng nach dem <strong>deutschen Reinheitsgebot</strong>.<bR><bR>

Als Zeichen und <strong>Garantie</strong> für unsere hohen Qualitätsansprüche, wurde das Haake-Beck <strong>Qualitätssiegel</strong> entwickelt. Es ist seit Sommer 2008 auf den Verpackungen unseres Bieres zu sehen. Nähere Informationen zur Auswahl unserer Rohstoffe und dem Herstellungsprozess von Haake-Beck finden Sie unter <a href="http://www.ab-inbev.de/" target="_blank">www.ab-inbev.de</a>.<bR><bR>

Darüber hinaus sind wir uns bewusst, dass Haake-Beck als <strong>reines Naturprodukt</strong> auf eine<strong> intakte Umwelt</strong> angewiesen ist. Erfahre Näheres über <strong>unser preisgekröntes Umweltmanagementsystem</strong> und wirf einen Blick auf die Zahlen und Fakten rund um unseren niedrigen Energieverbrauch unter <a href="http://www.ab-inbev.de/" target="_blank"> www.ab-inbev.de</a>.</p>
        
        
        <div class="clear"></div>
        
      
        
     
      </div>
        </div>
      
      <div class="clear"></div>
      <?php require_once '../../include/teaser/yellow_produkte.php'; ?>
      
      <?php require_once("../../include/footer.php"); ?>
      
      
      
    </div>
    <div class="grid-m4"></div>
    <div class="grid-c4"> <?php $product = 'Pils'; require_once("../../include/sidebar.php"); ?>
    </div>
    <?php require_once("../../include/js.php"); ?>
  </body>
</html>