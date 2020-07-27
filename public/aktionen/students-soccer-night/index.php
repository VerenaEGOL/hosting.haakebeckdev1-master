<?php
  require_once("../../include/app.php"); 
?>
<!DOCTYPE html>
<html lang="de">
<head>

<?php $pagetitle='Students Soccer Night'; require_once("../../include/head.php"); ?>
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
      
      
      
      <div id="slider" class="owl-carousel">
      
     

      <div>
        <h1 class="margin30">Haake-Beck <br>Students Soccer Night</h1>
          <div class="trennline linefirst"></div>
          <img src="/images/visuals/student-soccer-night.gif" alt="HAAKEBECK" class="visual" title="" />
          <div class="trennline linelast"></div>
          <h2 class="yellow">Am 11.11.2016 in der Soccer Halle von Werder Sports</h2>
          <p class="center">Am 11. November ist es wieder so weit: zum zweiten Mal treten Bremer Studenten-Mannschaften in der Haake-Beck Students Soccer Night gegeneinander an. Das Turnier wird in der Soccer Halle von Werder Sports in der Überseestadt ausgetragen. In Deutschlands modernster Soccer Halle warten vier Kunstrasen Courts auf die Teams. Während der Pausen zwischen den Matches können sich die Spieler am Haake-Beck Karacho Tacho versuchen, oder an den Haake-Beck Tischkickern ihr Können  beweisen.<br><bR> Den Gewinnern des Turniers winken hochwertige Sachpreise. Gespielt wird mit drei Feldspielern sowie einem Torwart. Anmelden können Sie Teams mit 6-8 Spielern, wobei das Turnier auf 24 Mannschaften begrenzt ist. Teilnehmen darf, wer über 18 und eingeschriebener Student ist. Die Teilnahmegebühr pro Team beträgt 49 Euro.<br><bR>
          
          - Jedes Team darf einen Fanclub (bis zu 4 Leute) mitbringen<br>
- Warm-Up 17 Uhr, Anstoss 18 Uhr<br><bR>
<a class="regular" target="_blank" href="http://tinyurl.com/guhgvdx"> Anmeldung</a>   <a class="regular" target="_blank" href="https://www.facebook.com/events/1763966630558619/">Facebook-Event</a>   </p>        
        
      </div>
      </div>
      </div>
      
    
      </div>




         
      
    

      
 
    
    
      
    
    <div class="clear"></div>
  

     
      <div class="grid-c2 coilteaser backgroundcoil firstcoil">
        <?php require_once("../../include/columnteaser/HAAKEBECK-sv-werder.php"); ?>
      </div>

      
  
    <div class="grid-c2 coilteaser backgroundcoil secondcoil">
      <?php require_once("../../include/columnteaser/HAAKEBECK-produkt-teaser-1.php"); ?>
  </div>
 
     




     
      
     
      <div class="clear"></div>

    <?php require_once("../../include/footer.php"); ?>
      
      	
    
  </div>
  <div class="grid-m4"></div>
  <div class="grid-c4"> <?php $product = 'Pils'; require_once("../../include/sidebar.php"); ?>
	</div>

<?php require_once("../../include/js.php"); ?>

</body>
</html>
