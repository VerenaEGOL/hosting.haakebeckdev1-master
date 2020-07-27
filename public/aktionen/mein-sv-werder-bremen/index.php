<?php
  require_once("../../include/app.php"); 
?>
<!DOCTYPE html>
<html lang="de">
<head>

<?php $pagetitle='Mein Werder'; require_once("../../include/head.php"); ?>
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
        <h1 class="margin30">HAAKE-BECK<br>
Mein SV Werder Bremen!</h1>
          <div class="trennline linefirst"></div>
          <a href="#"><img src="/images/visuals/Werder_Bremen_2019.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
          <div class="trennline linelast"></div>
          <h2 class="yellow">Lerne den Kader kennen</h2>
          <p class="center">Haake-Beck stellt euch die Spieler der Saison 2019/2020 des SV Werder Bremen vor. Hier kannst du dir die Steckbriefe der Spieler ansehen. 
<br><br><a class="regular" href="/aktionen/mein-sv-werder-bremen/steckbriefe.php?id=1">Zu den Steckbriefen</a></p>        
        
      </div>

      </div>
      </div>
      
    
      </div>
    
      

      
  
    <div class="grid-c2 kader coilteaser backgroundcoil firstcoil"><?php require_once("../../include/columnteaser/HAAKEBECK-werder-spieler-1.php"); ?></div>
    <div class="grid-c2 kader coilteaser backgroundcoil secondcoil"><?php require_once("../../include/columnteaser/HAAKEBECK-werder-spieler-2.php"); ?></div>
    <div class="grid-c2 kader coilteaser backgroundcoil firstcoil"><?php require_once("../../include/columnteaser/HAAKEBECK-werder-spieler-3.php"); ?></div>
    <div class="grid-c2 kader coilteaser backgroundcoil secondcoil"><?php require_once("../../include/columnteaser/HAAKEBECK-werder-spieler-4.php"); ?></div>

    <?php // require_once("../../include/columnteaser/HAAKEBECK-werder-spieler-5.php"); ?>
     
      
     
      <div class="clear"></div>
      
    <?php require_once("../../include/footer.php"); ?>
      
      	
    
  </div>
  <div class="grid-m4"></div>
  <div class="grid-c4"> <?php $product = '12'; require_once("../../include/sidebar.php"); ?>
	</div>

<?php require_once("../../include/js.php"); ?>

</body>
</html>
