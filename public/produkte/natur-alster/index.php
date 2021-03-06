<?php
require_once("../../include/app.php");
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <?php $pagetitle='Natur Alster'; require_once("../../include/head.php"); ?>
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
            
            
            
            
            <h1 class="margin30">Haake-Beck <br>Natur Alster</h1>
            <div class="trennline linefirst"></div>
            <a href="#"><img src="/images/visuals/haake-beck-alster.jpg" class="visual" title="" alt="HAAKEBECK Alster" /></a>
            <div class="trennline linelast"></div>
            <h2 class="yellow">Haake-Beck Pils trifft auf naturtrübe Zitronenlimonade</h2>
            <p class="center">Natürlich-naturtrübe Limonade kombiniert mit der angenehmen Hopfennote von Haake-Beck Pils. Ausgewogen herb und spritzig im Abgang.</p>
            
            
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
                <img src="/images/produkte/haake-beck-alster-gebinde-33-flasche.png" title="" alt="Haake-Beck Alster 0,33l Flasche" class="produktbild" />
                <p class="produktsubtitle center">0,33l Flasche</p>
              </div>
              <div>
                <img src="/images/produkte/haake-beck-alster-gebinde-24x33-kasten.png" title="" alt="Haake-Beck Alster 0,33l Flasche" class="produktbild" />
                <p class="produktsubtitle center">24 x 0,33l Kasten</p>
              </div>
              <div>
                <img src="/images/produkte/haake-beck-alster-gebinde-6x33-traeger.png" title="" alt="Haake-Beck Alster 0,33l Flasche" class="produktbild" />
                <p class="produktsubtitle center">6 x 0,33l Träger</p>
              </div>
              
            </div>
            
          </div>
          
        </div>
        
        <div class="grid-c2 coilteaser backgroundcoil secondcoil">
          
           <div class="coil_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
          <div class="teaser_content">
            <h3>Haake-Beck <br>Natur Alster</h3><br><table class="produkte_naehrwerte">
              
              
             
                <tr>
                  <td><p><strong>Brennwert:</strong></p></td>
                  <td><p>135 kcal pro 330ml</p></td>
                </tr>
                <tr>
                  <td><p><strong>Eiweiß:</strong></p></td>
                  <td><p>0,8 g</p></td>
                </tr>
                <tr>
                  <td><p><strong>Kohlenhydrate:</strong></p></td>
                  <td><p>22,1 g</p></td>
                </tr>
                <tr>
                  <td><p><strong>Fett:</strong></p></td>
                  <td><p><0,5 g</p></td>
                </tr>
                <tr>
                  <td><p><strong>Alkoholgehalt:</strong></p></td>
                  <td><p>2,5% vol.</p></td>
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
      <div class="grid-c4">  <?php $product = 'NaturAlster'; require_once("../../include/sidebar.php"); ?>
      </div>
      <?php require_once("../../include/js.php"); ?>
    </body>
  </html>