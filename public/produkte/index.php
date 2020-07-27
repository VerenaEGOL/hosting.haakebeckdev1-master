<?php
require_once("../include/app.php");
$product = '';
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <?php $pagetitle='Produktübersicht'; require_once("../include/head.php"); ?>
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
    items:3,
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
            
            
            
            
            <h1 class="margin30">Der Genuss des Nordens: <br>
            ehrlich, offen und frisch.</h1>
            <div class="trennline linefirst"></div>
            <a href="#"><img src="/images/visuals/start-placeholder.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
            <div class="trennline linelast"></div>
            <h2 class="yellow">HAAKE-BECK bietet für jeden Geschmack<br> das passende Bier</h2>
            <p class="center">Ein Geschmack, den man kennt und den man mag. Trotzdem kommt keine Langeweile auf, denn Haake-Beck hat ein qualitativ hochwertiges Angebot, das so individuell und einzigartig ist, wie die Menschen im Norden. Was verbindet, ist der Genuss. Entdecke hier, was Haake-Beck alles zu bieten hat.</p>
            
            
          </div>
          
          
        </div>
        
        
        <!--Teaser FULL WIDTH Auswahl-->
        <div class="fullteaser backgroundfull">
          <?php include("../include/gen/touch_info_full.php"); ?>
          
          <div class="teaserinner">
            <div id="slider" class="owl-carousel">
              
               <div class="produebersicht">
                <a href="/produkte/pils/index.php"><img src="/images/produkte/haake-beck-produkteuebersicht-pils.png" class="produktuebersicht" title="" alt="Haake-Beck Pils" /></a>
                <h5 class="produktuebersicht"><a href="/produkte/12/index.php">Pils</a></h5>
              </div>
              <div class="produebersicht">
                <a href="/produkte/12/index.php"><img src="/images/produkte/haake-beck-produkteuebersicht-12.png" class="produktuebersicht" title="" alt="Haake-Beck 12" /></a>
                <h5 class="produktuebersicht"><a href="/produkte/12/index.php">12</a></h5>
              </div>
               <div class="produebersicht">
                <a href="/produkte/natur-alster/index.php"><img src="/images/produkte/haake-beck-produkteuebersicht-natur-alster.png" class="produktuebersicht" title="" alt="Haake-Beck Natur Alster" /></a>
                <h5 class="produktuebersicht"><a href="/produkte/natur-alster/index.php">Natur Alster</a></h5>
              </div>
              <!--
              <div class="produebersicht">
                <a href="/produkte/maibock/"><img src="/images/produkte/haake-beck-produkteuebersicht-maibock.png" class="produktuebersicht" title="" alt="Haake-Beck Maibock" /></a>
                <h5 class="produktuebersicht"><a href="/produkte/maibock/">Maibock</a></h5>
              </div>
              -->
              <div class="produebersicht">
                <a href="/produkte/kraeusen/index.php"><img src="/images/produkte/haake-beck-produkteuebersicht-kraeusen.png" class="produktuebersicht" title="" alt="Haake-Beck Kräusen" /></a>
                <h5 class="produktuebersicht"><a href="/produkte/kraeusen/index.php">Kräusen</a></h5>
              </div>

            </div>
            
          </div>
          
        </div>
        
        <!--Teaser FULL WIDTH Auswahl-->
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="clear"></div>
        
        <?php require_once("../include/footer.php"); ?>
        
        
        
      </div>
      <div class="grid-m4"></div>
      <div class="grid-c4">  <?php require_once("../include/sidebar.php"); ?>
      </div>
      <?php require_once("../include/js.php"); ?>
    </body>
  </html>