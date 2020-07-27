<?php
  require_once '../../include/app.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>

<?php $pagetitle = 'Upn Swutsch'; require_once '../../include/head.php'; ?>
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
<?php require_once '../../include/alterscheck.php'; ?>

<div class="grid margtop">
  <div class="grid-m1"></div>
  
 
  
  <div class="grid-c1"> 
  
  <div class="navigation-wrapper">
    <?php require_once '../../include/navigation.php'; ?>
   
   <?php require_once '../../include/socialbar.php'; ?> 
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
Werder up’n Swutsch

</h1>
          <div class="trennline linefirst"></div>
          <img src="/images/visuals/swutsch-04-18.jpg" class="visual" title="" alt="HAAKEBECK" />
          <div class="trennline linelast"></div>
          <h2 class="yellow">Das ECHTE Gespräch

</h2>
          <p class="center">Eine Kneipe, ein frisch gezapftes HAAKE-BECK - und ein Werder-Profi zum Anfassen nah, das ist "Werder up’n Swutsch" präsentiert von SV Werder und Haake-Beck. <?php /*?>Hier beantworten Werder Profis und Verantwortliche in lockerer Atmosphäre Fragen aus dem sportlichen und privaten Bereich.<?php */?></p>        
        
      </div>
      </div>
      </div>
      
    
      </div>



 <div class="fullteaser backgroundfull">
      
        
      <div class="teaserinner">
      
      
          <h2 class="yellow">Thomas Delaney in der „Strandbude“</h2>
          <p class="center">Am 09. Mai 2018 ging Werder Up´n Swutsch in eine neue, elfte Runde. In der „Strandbude“ in Bremen Vegesack empfing Lou Richter den Werder Bremen Mittelfeld Spieler Thomas Delaney. In lockerer Atmosphäre und bei einem frischen Haake-Beck beantwortete der Däne Fragen aus dem sportlichen und privaten Bereich.

<br><br>Mit freundlicher Unterstützung von<br><br><a class="regular" target="_blank" href="http://www.werder.de/">www.werder.de</a></p>        
        
      </div>
      
      
    
      </div>
    
      <div class="clear"></div>
         
      
    
    <div class="grid-c2 coilteaser backgroundcoil firstcoil">
      <?php require_once("../../include/columnteaser/HAAKEBECK-strandbudegalerie.php"); ?>
    </div>

      
  
    <div class="grid-c2 coilteaser backgroundcoil secondcoil">
      <?php require_once '../../include/columnteaser/HAAKEBECK-upnswutschvideo.php'; ?>
  </div>
    




     
      
     
      <div class="clear"></div>
      


    <?php require_once '../../include/footer.php'; ?>
      
      	
    
  </div>
  <div class="grid-m4"></div>
  <div class="grid-c4"> <?php $product = 'Pils'; require_once '../../include/sidebar.php'; ?>
	</div>

<?php require_once '../../include/js.php'; ?>

</body>
</html>
