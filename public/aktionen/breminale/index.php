<?php
  require_once("../../include/app.php"); 
?>
<!DOCTYPE html>
<html lang="de">
<head>

<?php $pagetitle='Breminale'; require_once("../../include/head.php"); ?>
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
        <h1 class="margin30">HAAKE-BECK präsentiert:  <br>DIE BREMINALE!


</h1>
          <div class="trennline linefirst"></div>
          <a href="#"><img src="/images/visuals/breminale-2018.jpg" alt="HAAKEBECK" class="visual" title="" /></a>
          <div class="trennline linelast"></div>
          <h2 class="yellow">Der kunterbunte Kulturtrubel verzaubert den Osterdeich seit 1987

</h2>
          <p class="center">Die Breminale geht in die nächste Runde. Vom <strong>25. bis zum 29. Juli 2018</strong> präsentieren eine Vielzahl von Akteuren und Partnern ein buntes Programm aus Musik, Kultur und kulinarischem Genuss entlang der Osterdeichwiesen und verwandeln die beliebten Grünflächen in ein buntes Dorf aus Zeltplane, Lichterketten, windschiefen Hütten und der wichtigsten Zutat: Euch! Von klein bis groß und von jung bis alt, ist für jeden Geschmack gesorgt und der Regenwurm macht Urlaub. Drehen wir einmal mehr zusammen am Zeiger und schaffen ein Gemeinschaftsgefühl städtischer Identität. Für uns. Für Bremen. Für Alle. Es lebe die Breminale! 
</p>        
        
      </div>
      </div>
      </div>
      
    
      </div>




         
      
    

      
 <div class="fullteaser backgroundfull">
      
        
      <div class="teaserinner">
      
      
          <h2 class="yellow">Manege frei für die Breminale</h2>
          <p class="center">Die Breminale unterteilt sich örtlich in zwei Bereiche:
Die Breminale Im Park (ehemals Himmlische Wiese) und die Breminale Am Deich (Gesamte Promenade am Ufer). Hinzu kommt 2018 die <strong>NACHTINALE</strong>, die das Programm der Breminale in die Nacht hinein
erweitert und um neue Aspekte, wie Club- und Ausgehkultur ergänzt. Bis jetzt haben die
Teilnahme an der Nachtinale bestätigt: Das Römer, das Kafé Lagerhaus und der Tower. Das Kinder- und Familienprogramm wird unter der Leitung von Simone Bacher neu und
breiter aufgestellt und bekommt mit dem Namen <strong>KINDERBREMINALE</strong> eine exponiertere
Stellung im Gesamtprogramm der Breminale. Örtlich ist die Kinderbreminale auf drei
Bereiche verteilt: Das <strong>LUFTSCHLOSS</strong> (Bühne für Kinderprogramm auf der Altmannshöhe),
die <strong>KINDERWIESE</strong> (ausgewiesene Fläche Am Deich) und vereinzelte Angebote Im Park.
Der Sonntag wird mit erweitertem Programm als Kinder- und Familientag angekündigt.
<br><bR>
<a class="regular" href="http://www.breminale-festival.de/" target="_blank">www.breminale-festival.de</a><bR><bR>
                 </p><p class="center" style="font-size:12px">Fotos + Text: concept bureau UG</p>
      </div>
      
      
    
      </div>
    
      <div class="clear"></div>
  

     
      <?php require_once("../../include/teaser/breminale_galerie.php"); ?>
 
     




     
      
     
      <div class="clear"></div>

    <?php require_once("../../include/footer.php"); ?>
      
      	
    
  </div>
  <div class="grid-m4"></div>
  <div class="grid-c4"> <?php $product = 'Pils'; require_once("../../include/sidebar.php"); ?>
	</div>

<?php require_once("../../include/js.php"); ?>

</body>
</html>
