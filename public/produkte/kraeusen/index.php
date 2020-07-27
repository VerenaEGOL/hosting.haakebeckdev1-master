<?php
require_once("../../include/app.php");
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <?php $pagetitle='Kräusen'; require_once("../../include/head.php"); ?>
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
            
            
            
            
            <h1 class="margin30">Kräusen<bR>Die norddeutsche Spezialität</h1>
            <div class="trennline linefirst"></div>
            <a href="#"><img src="/images/visuals/haake-beck-kraeusen.jpg" class="visual" title="" alt="HAAKEBECK Kräusen" /></a>
            <div class="trennline linelast"></div>
            <h2 class="yellow">Die naturtrübe, nordische Bierspezialität mit feiner, gelber Opaleszenz.</h2>
            <p class="center">Ordentliche Schaumbildung und schönes Hopfenbukett gepaart mit einem filigranen Hefeduft. Ausgewogen weich und mild im Trunk. Begleitet von einer belebenden Frische. Zartbitter sein Ausklang. Seine natürliche Trübe verdankt Haake-Beck Kräusen einer besonderen Bierhefe aus eigener Reinzucht.<br><bR>Haake-Beck Kräusen passt besonders gut zu Geflügel, Spargelgerichten, Salat, Fisch und Meeresfrüchten. Es eignet sich aber auch als Aperitif oder zum Mixen mit Campari.</p>
            
            
          </div>
          
          
        </div>
        
        <div id="equalize">
      <div class="grid-c2 coilteaser backgroundcoil firstcoil">
          
          <div class="coil_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
          <div class="teaser_content produkte">
            <h3 class="headlineprodukte">GEBINDEFORMEN</h3>
            
            <div id="slider" class="owl-carousel">
              
              
              <div>
                <img src="/images/produkte/haake-beck-kraeusen-gebinde-glas.png" title="" alt="Haake-Beck Kräusen" class="produktbild" />
                <p class="produktsubtitle center">im Ausschank</p>
              </div>  
              
                
            
                            
              
              
             
              
            </div>
            
          </div>
          
        </div>
        
        <div class="grid-c2 coilteaser backgroundcoil secondcoil">
          
           <div class="coil_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
          <div class="teaser_content">
            <h3>Haake-Beck Kräusen</h3><br><table class="produkte_naehrwerte">
              <tr>
                <td><p><strong>Zutaten:</strong></p></td>
                <td><p>Brauwasser, Gerstenmalz, Hopfen</p></td>
              </tr>
              
             
                <tr>
                  <td><p><strong>Stammwürze:</strong></p></td>
                  <td><p> 11,2%</p></td>
                </tr>
                <tr>
                  <td><p><strong>Alkoholgehalt:</strong></p></td>
                  <td><p>5,0% vol.</p></td>
                </tr>
                <tr>
                  <td><p></p></td>
                  <td><p></p></td>
                </tr>  <tr>
                  <td><p></p></td>
                  <td><p></p></td>
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
      <div class="grid-c4">  <?php $product = 'Kraeusen'; require_once("../../include/sidebar.php"); ?>
      </div>
      <?php require_once("../../include/js.php"); ?>
    </body>
  </html>