<?php
require_once("../include/app.php");
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <?php $pagetitle='Impressum'; require_once("../include/head.php"); ?>
    <meta name="description" content="#">
    <script>
    $(document).ready(function() {
      $("#slider").owlCarousel({

      navigation : true,
      slideSpeed : 600,
      paginationSpeed : 400,
      singleItem : true,
    pagination: false,
    autoHeight: false,
    autoPlay: false,
    

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
      
      
      
     
       <h1 class="margin30">HAAKE-BECK<br>Impressum</h1>
          <div class="trennline linefirst"></div>
          <img src="/images/visuals/start-placeholder.jpg" class="visual" title="" alt="HAAKEBECK Impressum" />
          <div class="trennline linelast"></div>
          <h2 class="yellow alignleft marginleft marginright">Anschrift und Kontakt Haake-Beck</h2>
          <p class="alignleft marginleft marginright marginbottomhalf">Vielleicht finden Sie die Antwort auf Ihre Frage schon im FAQ-Bereich unter Kontakt. Sollte die gesuchte Antwort nicht verfügbar sein, dann nutzen Sie bitte einfach und bequem unser Kontaktformular oder die unten genannte Mailadresse.</p>
        
       
        <?php /*?><p class="alignleft bolder marginleft marginright">Hausanschrift:</p><p class="alignleft margintop marginleft marginright"> Am Deich 18/19<br> 28199 Bremen<br><br>


P.H.G. Brauerei Beck GmbH & Co. KG
(HRA-Nr. 10013 AG, Bremen)<br>
P.H.G. Kaiserbrauerei GmbH & Co. oHG
(HRA-Nr. 16439 AG Bremen)<br>
P.H.G. Kaiserbrauerei GmbH
(HRB 3642 AG, Bremen)<br><br>

GESCHÄFTSFÜHRER: HEINZ BEEKMANN, ALEXANDER GERBER<br><br>

Umsatzsteueridentifikationsnummer: DE-71/540/10593<br><br><?php */?>


       
        <p class="alignleft bolder marginleft marginright">Pflichtangaben gemäß § 35a GmbHG / § 125a HGB</p>
        <p class="alignleft margintop marginleft marginright"><strong>Haake-Beck AG</strong><bR> 
       Haake-Beck AG<br>
Hausanschrift: Am Deich 18/19, 28199 Bremen<br><br>

HRB-Nr. 32109 HB, Amtsgericht Bremen<br>
Vorstand: Bärbel Lumm, Eveline Urfer<br>
Vorsitzende des Aufsichtsrats: Stefanie Häseker
<br><br><strong>Hinweis gemäß § 36 Verbraucherstreitbeilegungsgesetz  (VSBG):</strong><br>                                                                                                     
Wir sind zur Teilnahme an einem Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle weder bereit noch dazu verpflichtet.<br><bR>

Haake-Beck ist Bestandteil des Produktportfolios von Anheuser Busch InBev Deutschland. Anheuser Busch InBev Deutschland ist ein Teil von Anheuser Busch InBev, dem größten Brauunternehmen der Welt. Anheuser Busch InBev hat ein Absatzvolumen von 246,5 Millionen Hektolitern Bier (Basis 2006) und hat in seinem Portfolio mehr als 200 Marken in 140 Ländern. Entstanden ist Anheuser Busch InBev im Herbst 2004 aus der Fusion der belgischen Interbrew und der brasilianischen AmBev.<br><br>

Weitere Informationen zum Konzern und den Produkten erhälst du unter www.ab-inbev.de<br><br>

Viel Spaß beim Surfen!
</p>
        <img class="margintop marginleft marginright" src="/images/generic/abinbev-hotline.png" width="150" height="76" title="" alt="Kontakt Hotline" />
        <p class="alignleft marginleft marginright">*kostenfreie Hotline<br><br>
          
          Für Fragen und Anregungen nutzen Sie einfach und bequem unser Kontaktformular. </p><br>
       
        <p class="bolder marginleft marginright yellow marginbottomhalf">Fotonachweis</p>
        <p class="marginleft marginright marginbottomhalf">
          &copy; 35581244 - Bauer Alex - Fotolia.com,&copy; 45878635 - Fotolia.com, &copy; iStock 000017771682, &copy; iStock 000022599375<br>
         
         
        </p>
        
     
      </div>
        </div>
      
      <div class="clear"></div>
      <?php require_once '../include/teaser/yellow_produkte.php'; ?>
      
      <?php require_once("../include/footer.php"); ?>
      
      
      
    </div>
    <div class="grid-m4"></div>
    <div class="grid-c4"> <?php $product = 'Pils'; require_once("../include/sidebar.php"); ?>
    </div>
    <?php require_once("../include/js.php"); ?>
  </body>
</html>