<?php
  require_once("../../include/app.php"); 
?>
<!DOCTYPE html>
<html lang="de">
<head>

<?php $pagetitle='Der Haake-Beck Song'; require_once("../../include/head.php"); ?>
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
        <h1 class="margin30">Der Haake-Beck Song<br> ECHT HAAKE-BECK</h1>
          <div class="trennline linefirst"></div>
          <a href="http://www.ab-inbev.de/" target="_blank"><img src="/images/visuals/start-placeholder.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
          <div class="trennline linelast"></div>
          <h2 class="yellow">Spielt den selben Song nochmal!</h2>
          <p class="center">Haake-Beck hat seinen eigenen Song! ECHT HAAKE-BECK beschreibt nicht nur das Land und die Leute aus Norddeutschland sondern ein Lebensgefühl, dass es nur im Norden mit Haake-Beck geben kann! <br><br>

          <audio controls>
            <source src="files/song.mp3" type="audio/mpeg">
            Ihr Browser unterstützt dieses Audio-Element nicht. Bitte laden Sie sich einen aktuellen Brwoser herunter oder Downloaden Sie den Song.
          </audio>
          <br><br>
          <a class="regular" target="_blank" href="files/song.zip">Download</a>
          </p>        
        
      </div>
      
      
      
       

      
     
      
      </div>
      </div>
      
    
      </div>



        <div class="fullteaser backgroundfull">
      
        
      
      <div class="teaser_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
      <div class="teaserinner">
      
      


      <div>
        <h1 class="margin30">Songtext <br>ECHT HAAKE-BECK</h1>
          <p class="center">
          Hier an der Weser, Ems und Aller<br>
          Unsre grüne, weite Welt<br>
          Das Land der Werderaner<br>
          Da wo es uns gefällt.<br><br>

          Von der Küste bis nach Vechta<br>
          Von Bremen bis nach Osnabrück<br>
          Wir aus dem hohen Norden<br>
          Spiel'n ganz oben mit<br><br>

          Denn ohne Berge könn' wir weiter seh'n<br>
          Fast ohne Worte gut verstehn<br>
          Lasst uns feiern, dass wir hier zusammen sind<br><br>

          Unser Leben hier<br>
          Frische, die uns schmeckt<br>
          Ehrlich, pur und echt<br>
          Wie Haake-Beck<br><br>

          Darum sind wir hier<br>
          Gehen niemals weg<br>
          So schmeckt unser Land<br>
          Haake-Beck<br><br>

          Echt Haake-Beck<br><br>

          Wenn das Wetter manchmal grau ist<br>
          Und der Wind oft ganz schön rau<br>
          Bläst er schnell die Wolke weiter<br>
          Macht den Himmel wieder blau<br><br>

          Wenn's bei uns mal ein Problem gibt<br>
          Packen alle gleich mit an<br>
          Und dann kann uns keiner schlagen<br>
          Wir halten zusamm'<br><br>

          Denn ohne Berge könn' wir weiter seh'n<br>
          Fast ohne Worte gut verstehn<br>
          Lass uns feiern, dass wir hier zusammen sind<br><br>

          Darum sind wir hier<br>
          Gehen niemals weg<br>
          So schmeckt unser Land<br>
          Haake-Beck<br><br>
          <b>Echt Haake-Beck</b><br>
          </p>        
        
      </div>
      
      
      
       

      
     
      
      </div>
    
      </div>
    
      

      
      <?php require_once("../../include/teaserprodukte.php"); ?>
     
      
     
      <div class="clear"></div>
      
    <?php require_once("../../include/footer.php"); ?>
      
      	
    
  </div>
  <div class="grid-m4"></div>
  <div class="grid-c4"> <?php $product = 'Pils'; require_once("../../include/sidebar.php"); ?>
	</div>

<?php require_once("../../include/js.php"); ?>

</body>
</html>
