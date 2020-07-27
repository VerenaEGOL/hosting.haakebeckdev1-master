<?php require_once "include/app.php"; ?>
<!DOCTYPE html>
  <html lang="de">
  <head>
    <?php 
    $pagetitle='Startseite'; 
    require_once("include/head.php"); 
    ?>
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
          autoPlay: false
        });
      });
    </script>
    </head>
    <body class="maintheme">
      <?php require_once('include/alterscheck.php');?>
      <div class="grid margtop">
        <div class="grid-m1"></div>
        <div class="grid-c1">
          <div class="navigation-wrapper">
            <?php require_once("include/navigation.php"); ?>
            <?php require_once("include/socialbar.php"); ?>
          </div>
        </div>
        <div class="grid-m2"></div>
        <div class="grid-full">
          <p style="text-align: center; margin-bottom: 1em; margin-top: -1em;">
            <a class="regular" href="https://www.tapintoyourbeer.com/" target="_blank">Hier mehr über unsere Biere erfahren</a>
          </p>
          <div class="fullteaser backgroundfull">
            <div class="teaser_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
            <div class="teaserinner">
              <div id="slider" class="owl-carousel">                
                <div>
                  <h1 class="margin30">Haake-Beck <br>Natur Alster</h1>
                  <div class="trennline linefirst"></div>
                  <a href="/produkte/natur-alster/"><img src="/images/visuals/haake-beck-alster.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
                  <div class="trennline linelast"></div>
                  <h2 class="yellow">Haake-Beck Pils trifft auf naturtrübe Zitronenlimonade</h2>
                  <p class="center">
                    Natürlich-naturtrübe Limonade kombiniert mit der angenehmen Hopfennote von Haake-Beck Pils. Ausgewogen herb und spritzig im Abgang.<br><br><a class="regular" href="/produkte/natur-alster/">Zum Produkt</a>
                  </p>
                </div>
               
                <div>
                  <h1 class="margin30">HAAKE-BECK <br>Es war einmal </h1>
                  <div class="trennline linefirst"></div>
                  <a href="/aktionen/es-war-einmal/"><img src="/images/visuals/haake-beck-es-war-einmal.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
                  <div class="trennline linelast"></div>
                  <h2 class="yellow">bei Werder...</h2>
                  <p class="center">
                    Der SV Werder Bremen - ein Sportverein der eine lange Geschichte hat und viele Erfolge aufweisen kann. Hier stellen wir Dir die wichtigsten Eckdaten und einige Anekdoten aus der SV Werder Bremen Geschichte vor.<br><br><a class="regular" href="/aktionen/es-war-einmal/">Alle Infos</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-c2 coilteaser backgroundcoil firstcoil">
    <?php 
      $teaser1 = rand(1,2);

        if($teaser1 == 1) { 
            require_once("include/columnteaser/HAAKEBECK-sv-werder.php");
        }
        elseif($teaser1 == 2) {
            require_once("include/columnteaser/HAAKEBECK-produkt-teaser-1.php");
        }
		
       

      ?>
  </div>
            
          <div class="grid-c2 coilteaser backgroundcoil secondcoil">
            <?php require_once("include/columnteaser/HAAKEBECK-produkt-teaser-2.php"); ?>
              
            </div>
            <div class="clear"></div>
            <?php require_once("include/footer.php"); ?>
          </div>
          <div class="grid-m4"></div>
          <div class="grid-c4">
            <?php $product = 'Pils'; require_once("include/sidebar.php"); ?>
          </div>
          <?php require_once("include/js.php"); ?>
  </body>
</html>
