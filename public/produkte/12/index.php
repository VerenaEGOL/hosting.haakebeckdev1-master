<?php
require_once("../../include/app.php");
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <?php $pagetitle='12'; require_once("../../include/head.php"); ?>
    <meta name="description" content="#">
    <script>
    $(document).ready(function() {
      $("#slider").owlCarousel({

      navigation : false,
      slideSpeed : 600,
      paginationSpeed : 400,
      singleItem : false,
      pagination: true,
      autoHeight: false,
      autoPlay: false,
      items:1,
      itemsDesktopSmall : [1190,3],
      itemsTablet: [1024,2],
      itemsTablet: [768,1],

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
            
            
            
            
            <h1 class="margin30">Haake-Beck 12 - Das offizielle Fanbier von Werder Bremen</h1>
            <div class="trennline linefirst"></div>
            <a href="#"><img src="/images/visuals/haake-beck-12.jpg" class="visual" title="" alt="HAAKEBECK 12" /></a>
            <div class="trennline linelast"></div>
            <h2 class="yellow">Ein Bier von Fans für Fans von Werder Bremen!</h2>
            <p class="center">Dieses ausgewogene Bier ist besonders süffig im Geschmack. Sein Alkoholgehalt liegt bei 5% Vol., die Stammwürze bei 11,2%. Haake-Beck 12 ist im aufmerksamkeitsstarken Achter-Pack als Aktionsgebinde erhältlich.<bR><bR>

Die Besonderheit dieses Fanbieres liegt in der Entstehung. Vertreter der Fanclubs und Repräsentanten von Werder Bremen haben aus drei Produktvarianten, zwei Namensalternativen und verschiedenen Designvorschlägen "Haake-Beck 12" gewählt. Das frische und süffige Pils hat sich in der Verkostung gegen ein leichteres und dunkles Bier durchgesetzt. Auch der Name war schnell gefunden: die Zahl 12 steht für den zwölften Mann der Mannschaft - die Fans. Überzeugt hat das Etiketten-Design mit starkem Bezug zu Werder Bremen.<bR><bR>

Erstmalig ist ein Fanbier auf diese Art geschaffen worden. Es ist das erste Bier von den Fans für die Fans. Jetzt haben die Fans von Werder Bremen ihr eigenes Bier, das exakt nach ihrem Geschmack und ihren Vorstellungen ausgewählt wurde. </p>
            
            
          </div>
          
          
        </div>
        
      <div id="equalize">
        <div class="grid-c2 coilteaser backgroundcoil firstcoil">
            <?php include("../../include/gen/touch_info.php"); ?>
            
            <div class="coil_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
            <div class="teaser_content produkte">
              <h3 class="headlineprodukte">GEBINDEFORMEN</h3>
              
              <div id="slider" class="owl-carousel">
                <div>
                  <img src="/images/produkte/haake-beck-12-gebinde-25x33-kasten.png" title="" alt="Haake-Beck 12 25 x 0,33l Kasten" class="produktbild" />
                  <p class="produktsubtitle center">25 x 0,33l Kasten</p>
                </div>
                
                 <div>
                  <img src="/images/produkte/haake-beck-12-gebinde-33-steingut-flasche.png" title="" alt="Haake-Beck 12 0,33l Flasche" class="produktbild" />
                  <p class="produktsubtitle center">0,33l Flasche</p>
                </div>
                
                 <div>
                  <img src="/images/produkte/haake-beck-12-gebinde-8x33-traeger.png" title="" alt="Haake-Beck 12 8 x 0,33l Träger" class="produktbild" />
                  <p class="produktsubtitle center">8 x 0,33l Träger</p>
                </div>
                
               
                
              </div>
              
            </div>
            
          </div>
        
          <div class="grid-c2 coilteaser backgroundcoil secondcoil">
           
             <div class="coil_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
            <div class="teaser_content">
              <h3>Haake-Beck 12</h3><br><table class="produkte_naehrwerte">
                <tr>
                  <td><p><strong>Zutaten:</strong></p></td>
                  <td><p>Brauwasser, Gerstenmalz, Hopfen</p></td>
                </tr>
                <tr>
                  <td><p></p></td>
                  <td><p></p></td>
                </tr>
               
                  <tr>
                    <td><p><strong>Stammwürze:</strong></p></td>
                    <td><p> 11,2%</p></td>
                  </tr><tr>
                  <td><p></p></td>
                  <td><p></p></td>
                </tr>
                  <tr>
                    <td><p><strong>Alkoholgehalt:</strong></p></td>
                    <td><p>5 % vol.</p></td>
                  </tr>
                  
                  
                  
                  
                </table><bR>
              
              
                
                <p class="center margintop30">
                  <a href="/produkte/index.php" class="regular">ZURÜCK ZUR ÜBERSICHT</a>
                </p>
              </div>
            </div>
        </div>
        <div class="clear"></div>
        
        <?php require_once("../../include/footer.php"); ?>
        
        
        
      </div>
      <div class="grid-m4"></div>
      <div class="grid-c4">  <?php $product = '12'; require_once("../../include/sidebar.php"); ?>
      </div>
      <?php require_once("../../include/js.php"); ?>
    </body>
  </html>