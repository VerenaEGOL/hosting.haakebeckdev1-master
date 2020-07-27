<?php
  require_once("../include/app.php"); 
?>
<!DOCTYPE html>
<html lang="de">
<head>

<?php $pagetitle='Unternehmen'; require_once("../include/head.php"); ?>
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
<?php require_once('../include/alterscheck.php');?>

<div class="grid margtop">
  <div class="grid-m1"></div>
  
 
  
  <div class="grid-c1"> 
  
  <div class="navigation-wrapper">
    <?php require_once("../include/navigation.php"); ?>
   
   <?php require_once("../include/socialbar.php"); ?> 
  </div>
</div>
  <div class="grid-m2"></div>
  <div class="grid-full">
 
 
    <div class="fullteaser backgroundfull">
    	
        
      
      <div class="teaser_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
      <div class="teaserinner">
      
      
      
      <div id="slider" class="owl-carousel">
      
     

      <div>
        <h1 class="margin30">Haake-Beck <br>Unternehmen</h1>
          <div class="trennline linefirst"></div>
          <a href="http://www.ab-inbev.de/" target="_blank"><img src="/images/visuals/haake-beck-unternehmen.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
          <div class="trennline linelast"></div>
          <h2 class="yellow">Haake-Beck geh&ouml;rt zu Anheuser Busch InBev Deutschland</h2>
          <p class="center">Haake-Beck ist Bestandteil des Produktportfolios von Anheuser Busch InBev Deutschland. Anheuser Busch InBev Deutschland ist ein Teil von Anheuser Busch InBev, dem gr&ouml;&szlig;ten Brauunternehmen der Welt. Anheuser Busch  InBev hat in seinem Portfolio mehr als 200 Marken in 140 L&auml;ndern. Entstanden ist AB InBev im Herbst 2004 aus der Fusion der belgischen Interbrew und der brasilianischen AmBev. Weitere Informationen zum Konzern und den Produkten erh&auml;ltst du hier: <br><br><a class="regular" href="http://www.ab-inbev.de" target="_blank">www.ab-inbev.de</a></p>        
        
      </div>
      
      
      
       

      
     
      
      </div>
      </div>
      
    
      </div>
    
      

      
  
    <div class="grid-c2 coilteaser backgroundcoil firstcoil"> 
  
     
     
      <?php require_once("../include/columnteaser/HAAKEBECK-mediendatenbank.php"); ?>
 
     
      </div>
    

    
    <div class="grid-c2 coilteaser backgroundcoil secondcoil"> 
     
    
      <?php require_once("../include/columnteaser/HAAKEBECK-gastro.php"); ?>
      
     
      </div>
      
       <div class="grid-c2 coilteaser backgroundcoil firstcoil"> 
  
     
     
      <?php require_once("../include/columnteaser/HAAKEBECK-besucherzentrum.php"); ?>
 
     
      </div>
    

    
    <div class="grid-c2 coilteaser backgroundcoil secondcoil"> 
     
    
      <?php require_once("../include/columnteaser/HAAKEBECK-presse.php"); ?>
      
     
      </div>
     
      
     
      <div class="clear"></div>
      
    <?php require_once("../include/footer.php"); ?>
      
      	
    
  </div>
  <div class="grid-m4"></div>
  <div class="grid-c4"> <?php $product = 'Pils'; require_once("../include/sidebar.php"); ?>
	</div>

<?php require_once("../include/js.php"); ?>

</body>
</html>
