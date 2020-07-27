<?php
require_once("../../include/app.php");
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <?php $pagetitle='Pils'; require_once("../../include/head.php"); ?>
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
            
            
            
            
            <h1 class="margin30">Pils<bR>Feinherb und frisch</h1>
            <div class="trennline linefirst"></div>
            <a href="#"><img src="/images/visuals/haake-beck-pils.jpg" class="visual" title="" alt="HAAKEBECK Pils" /></a>
            <div class="trennline linelast"></div>
            <h2 class="yellow">Haake-Beck Pils zeichnet sich durch seinen feinherben und frischen Geschmack aus.</h2>
            <p class="center">Gradlinig und authentisch wirkender, norddeutscher Pilstyp. Blanke, hellgelbe Farbe. Ordentlich sauberes Schaumgefüge. Schöne Hopfennote, mit einem Hauch Zitrus. Schlank und frisch im Antrunk. Ausgewogen herb und trocken im Ausklang. Eines der beliebtesten Pilsbiere Norddeutschlands.<bR><bR>Haake-Beck Pils passt besonders gut zu Wildgerichten, Muscheln, würzigem Käse, Pasta, vegetarischen Gerichten und kräftig gewürzten Speisen und eigent sich als Aperitif.</p>
            
            
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
                <img src="/images/produkte/haake-beck-pils-gebinde-33-steingut-flasche.png" title="" alt="Haake-Beck Pils 0,33l Steinieform Flasche" class="produktbild" />
                <p class="produktsubtitle center">0,33l Steinieform Flasche</p>
              </div>  
               <div>
                <img src="/images/produkte/haake-beck-pils-gebinde-25x33-kasten.png" title="" alt="Haake-Beck Pils 25 x 0,33l Kasten" class="produktbild" />
                <p class="produktsubtitle center">25 x 0,33l Kasten</p>
              </div>  
              
                            <div>
                <img src="/images/produkte/haake-beck-pils-gebinde-33-flasche.png" title="" alt="Haake-Beck Pils 0,33l Flasche" class="produktbild" />
                <p class="produktsubtitle center">0,33l Flasche</p>
              </div>  
              
              <div>
                <img src="/images/produkte/haake-beck-pils-gebinde-6x33-traeger.png" title="" alt="Haake-Beck Pils 6 x 0,33l Träger" class="produktbild" />
                <p class="produktsubtitle center">6 x 0,33l Träger</p>
              </div>  
              <div>
                <img src="/images/produkte/haake-beck-pils-gebinde-24x33-kasten.png" title="" alt="Haake-Beck Pils 24 x 0,33l Kasten" class="produktbild" />
                <p class="produktsubtitle center">24 x 0,33l Kasten</p>
              </div>  
              
             
             <div>
                <img src="/images/produkte/haake-beck-pils-gebinde-5-flasche.png" title="" alt="Haake-Beck Pils 0,5l Flasche" class="produktbild" />
                <p class="produktsubtitle center">0,5l Flasche</p>
              </div>  
              
                <div>
                <img src="/images/produkte/haake-beck-pils-gebinde-6x5-traeger.png" title="" alt="Haake-Beck Pils 6 x 0,5l Träger" class="produktbild" />
                <p class="produktsubtitle center">6 x 0,5l Träger</p>
              </div>  
              
              <div>
                <img src="/images/produkte/haake-beck-pils-gebinde-20x5-kasten.png" title="" alt="Haake-Beck Pils 20 x 0,5l Kasten" class="produktbild" />
                <p class="produktsubtitle center">20 x 0,5l Kasten</p>
              </div>
              
                        
              <div>
                <img src="/images/produkte/haake-beck-pils-gebinde-dose.png" title="" alt="Haake-Beck Pils 0,5l Dose" class="produktbild" />
                <p class="produktsubtitle center">0,5l Dose</p>
              </div>  
            
                            
              
              
             
              
            </div>
            
          </div>
          
        </div>
        
        <div class="grid-c2 coilteaser backgroundcoil secondcoil">
          
           <div class="coil_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
          <div class="teaser_content">
            <h3>Haake-Beck Pils</h3><br><table class="produkte_naehrwerte">
              <tr>
                <td><p><strong>Zutaten:</strong></p></td>
                <td><p>Brauwasser, Gerstenmalz, Hopfen</p></td>
              </tr> <tr>
                  <td><p></p></td>
                  <td><p></p></td>
                </tr>
              
             
                <tr>
                  <td><p><strong>Stammwürze:</strong></p></td>
                  <td><p> 11,5%</p></td>
                </tr><tr>
                  <td><p></p></td>
                  <td><p></p></td>
                </tr>
                <tr>
                  <td><p><strong>Alkoholgehalt:</strong></p></td>
                  <td><p>5,0% vol.</p></td>
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
      <div class="grid-c4">  <?php $product = 'Pils'; require_once("../../include/sidebar.php"); ?>
      </div>
      
      <?php require_once("../../include/js.php"); ?>
    </body>
  </html>