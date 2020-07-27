<?php
  require_once("../../include/app.php"); 
?>
<!DOCTYPE html>
<html lang="de">
<head>

<?php $pagetitle='BadeinselRegatta'; require_once("../../include/head.php"); ?>
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
        <h1 class="margin30">HAAKE-BECK BadeinselRegatta®  <br>am 23. Juli 2016


</h1>
          <div class="trennline linefirst"></div>
          <a href="#"><img src="/images/visuals/BIR.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
          <div class="trennline linelast"></div>
          <h2 class="yellow">So badet man im Norden!

</h2>
          <p class="center">Am <strong>23. Juli 2016</strong> ist es wieder soweit: Die Haake-Beck BadeinselRegatta® ruft zum alljährlichen Paddelwettbewerb auf. In diesem Jahr gehen 117 Teams à 2 Personen an den Start und paddeln um die Wette. Anschließend gibt es abends am Café Sand die Party des Sommers!</p>        
        
      </div>
      </div>
      </div>
      
    
      </div>




         
      
    

      
 <div class="fullteaser backgroundfull">
      
        
      <div class="teaserinner">
      
      
          <h2 class="yellow">Wettpaddeln auf der Haake-Beck BadeinselRegatta® 2016</h2>
          <p class="center">Einmal mit dabei sein auf der Haake-Beck BadeinselRegatta®: Das Paddeln auf der Weser, die Party des Sommers, das frische Haake-Beck danach. Ein Erlebnis, das niemand vergisst. Nur durch das Bewegen der Arme und Beine wird um die Wette gepaddelt und die 1,6 Kilometer zum Café Sand bewältigt. Damen, Herren oder gemischte Teams – das ist egal. Natürlich gilt wie immer das Motto: "Once in a lifetime".  <?php /*?><bR><bR><strong>

Ihr wollt auch einmal bei dem Spektakel dabei sein und mitpaddeln?</strong><br> Zwar sind aufgrund der wetterbedingten Absage im letzten Jahr die meisten Startplätze bereits mit den Teilnehmern aus 2015 belegt, trotzdem verlosen wir weitere Startplätze!<br><br>
<a class="regular" href="/aktionen/badeinselregatta/anmeldung_regatta.php">Zu den Gewinnern</a><?php */?>
</p>        
        <h2 class="yellow">Für die, die lieber laufen:<br>Der Haake-Beck BadeinselLauf® 2016</h2>
                  <p class="center">Es gilt, die Weser auf bis zu 100 Badeinseln zu überqueren – und für jede geschaffte Insel gibt es einen Liter frisches Haake-Beck! <?php /*?>Teilnahmeplätze für den Haake-Beck BadeinselLauf® könnt ihr hier ergattern.<br><br>
                  <a class="regular" href="/aktionen/badeinselregatta/anmeldung_lauf.php">Zu den Gewinnern</a><?php */?>
                  
                 </p>
      </div>
      
      
    
      </div>
    
      <div class="clear"></div>
      <div class="fullteaser backgroundfull">
      
        
      <div class="teaserinner">
      
      
          <h2 class="yellow">Das Musikhighlight in diesem Jahr</h2>
          <p class="center">Diesjähriges Highlight der Haake-Beck BadeinselRegatta ® ist Andreas Kümmert. Der Sieger von “The Voice of Germany”, der seine Hörer mit seiner eindringlichen Stimme begeistert, gibt um 17:30 Uhr den Startschuss zur BadeinselRegatta®.<br><br>
Doch bevor Andreas Kümmert um 21:00 Uhr loslegt, heizen euch die Afterburner direkt nach der Siegerehrung am Café Sand ordentlich ein.<br>
<br>Krönender Abschluss der diesjährigen Haake-Beck
BadeinselRegatta® bildet das beliebte und farbenfrohe Feuerwerk auf der Weser.<br><br><a class="regular" href="BadeinselRegatta-Programm.pdf">Programm Plakat [.PDF]</a> 
        </p>
      </div>
      
      
    
      </div>
    
      <div class="clear"></div>
  

     
      <div class="grid-c2 coilteaser backgroundcoil firstcoil">
        <?php require_once("../../include/columnteaser/HAAKEBECK-BIR-Galerie.php"); ?>
      </div>



          <div class="grid-c2 coilteaser backgroundcoil secondcoil"> 



            <?php require_once("../../include/columnteaser/HAAKEBECK-BIR-Kuenstler.php"); ?>


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
