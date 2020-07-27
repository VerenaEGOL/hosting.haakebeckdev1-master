<?php
require_once("../../include/app.php");
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <?php $pagetitle='Bremer Freimarkt'; require_once("../../include/head.php"); ?>
    <meta name="description" content="#">
    <script>
    $(document).ready(function() {
      $("#slider").owlCarousel({

      navigation : false,
      slideSpeed : 600,
      paginationSpeed : 400,
      singleItem : true,
      pagination: true,
      autoHeight: true,
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
            <h1 class="margin30">Haake-Beck präsentiert den <br>
            983. Bremer Freimarkt 
            </h1>
            <div class="trennline linefirst"></div>
            <img src="/images/visuals/2018-freimarkt.jpg" class="visual" title="" alt="Bremer Freimarkt " />
            
            
            <div class="trennline linelast"></div>
            <h2 class="yellow">19. Oktober – 4. November 2018 </h2>
          <p class="center">
             Die letzten beiden Wochen im Oktober stehen in Bremen traditionell im Zeichen der fünften Jahreszeit. So nennen Bremerinnen und Bremer die Zeit des Freimarktes. Zum 983. Mal heißt es dann ‚Ischa Freimaak‘ in der Hansestadt. Das Recht einen freien Markt abzuhalten, hat sich zu einem der ältesten Volksfeste Deutschlands entwickelt. Rund 320 Schausteller sorgen für Nervenkitzel, Spaß und Gaumenfreuden. Das Hauptgeschehen spielt sich auf der zentral gelegenen Bürgerweide direkt am Bremer Hauptbahnhof ab, aber auch rund um Roland und Rathaus im Herzen Bremens stehen Karussells und Buden. Ein historischer Markt zwischen Rathaus und Unser Lieben Frauen Kirche erinnert an den Ursprung. Der Reformationstag am Mittwoch, 31. Oktober als neuer gesetzlicher Feiertag in Bremen fällt zur Premiere in die Freimarktszeit.</p><p class="center"> Das Volksfest ist täglich von 13 – 23 Uhr geöffnet, freitags und samstags sogar bis 24 Uhr, auch am 30. Oktober gilt die verlängerte Öffnungszeit. Am Eröffnungstag geht es auf der Bürgerweide ab 16 Uhr los.
            </p>
            <br>
           
            </div>
          </div>
  <div class="clear"></div>

<div class="fullteaser backgroundfull">
    <div class="teaserinner">
      <h2 class="yellow">Zur Halbzeit heißt es ‚Ischa Freimarktsumzug‘</h2>
      <div class="trennline linefirst"></div>
      <img src="2018-freimarkt.jpg" alt="HAAKEBECK" width="960"class="visual" title="" />
      <div class="trennline linelast"></div>
      <br>
      <p class="center">Am Samstag, 27. Oktober erreicht das traditionsreiche Volksfest seinen Höhepunkt. Der Freimarktsumzug mit 150 Festwagen und Laufgruppen krönt das bunte Treiben in Bremen. Zum 51. Mal zieht die Karawane an den rund 200.000 Zuschauenden vorbei und verwandelt die Bremer Innenstadt in ein Meer aus Konfetti und Bonbons. Erntewagen, Spielmannszüge, bunte Kostüme und sportliche Darbietungen, viele Vereine aus nah und fern, Bremer Institutionen und hier ansässige Firmen zeigen sich von ihrer vergnügten Seite. Um 10 Uhr fällt der Startschuss in der Bremer Neustadt, der erste Wagen erreicht den Marktplatz um 11 Uhr. Krönender Abschluss ist die Prämierung der besten Teilnehmenden auf dem Freimarkt.<br>
        <br>
        <a class="regular" href="download/PM_983_allgemein.pdf" target="_blank">komplette Pressemitteilung</a> </p>
    </div>
  </div>

<div class="clear"></div>
  
      
      <div class="clear"></div>
      <?php require_once("../../include/teaserprodukte.php"); ?>
      
      <?php require_once("../../include/footer.php"); ?>
      
      
      
    </div>
    <div class="grid-m4"></div>
    <div class="grid-c4"> <?php $product = 'Pils'; require_once("../../include/sidebar.php"); ?>
    </div>
    <?php require_once("../../include/js.php"); ?>
  </body>
</html>