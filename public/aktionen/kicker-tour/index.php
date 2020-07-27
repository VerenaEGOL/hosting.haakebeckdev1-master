<?php
  require_once("../../include/app.php"); 
?>
<!DOCTYPE html>
<html lang="de">
<head>

<?php $pagetitle='Kicker-Tour'; require_once("../../include/head.php"); ?>
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
        <h1 class="margin30">HAAKE-BECK<br>
KICKER-TOUR!
</h1>
          <div class="trennline linefirst"></div>
          <a href="#"><img src="kickertour.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
          <div class="trennline linelast"></div>
          <h2 class="yellow">Du hast mal wieder Lust auf eine Runde <br>Tischkicker mit deinen Freunden?

</h2>
          <p class="left">Dann nutze jetzt die Chance und nimm an unserer Haake-Beck Kicker-Tour durch Bremen teil und gewinne tolle Preise.
            Innerhalb von 3 Wochen sind wir in insgesamt 6 unterschiedlichen Locations in Bremen unterwegs und küren den besten Tischkicker-Spieler anschließend im Weser-Stadion. Du kannst dich direkt vor Ort zwischen 19:00 Uhr und 20:00 Uhr anmelden und mitspielen. Dein Teampartner wird Dir vor jedem Spiel neu und niveaugerecht zugelost. Damit Du während des Turniers stets bestens versorgt bist, bekommst du von uns als Durstlöscher 3 gratis Haake-Beck 12. Jeder hat die Chance, sich bei den Vorrunden-Turnieren für das große Finale im Weserstadion zu qualifizieren und einen Jahresvorrat an Haake-Beck zu gewinnen. Die Teilnahme ist ab 18 Jahren möglich.</p>        
        
      </div>
      </div>
      </div>
      
    
      </div>




         
      
    <div id="equalize">
    <div class="grid-c2 coilteaser backgroundcoil firstcoil"> 
     
    
      <?php require_once("../../include/columnteaser/HAAKEBECK-kickertour.php"); ?>
      
     
      </div>

      
  
    <div class="grid-c2 coilteaser backgroundcoil secondcoil"> 
  
     
     
      <?php require_once("../../include/columnteaser/HAAKEBECK-kickertour_daten.php"); ?>
 
     
      </div>
    </div>




     
      
     
      <div class="clear"></div>
      
 <div class="fullteaser backgroundfull">
      
        
      <div class="teaserinner">
      
      
          <h2 class="yellow">Turniermodus – So wird gespielt:</h2>
          <p class="left">
Nach der Anmeldung wird eine zweistündige Vorrunde gespielt. Dabei wird dein Teampartner sowie das Gegnerteam nach jedem Spiel niveaugerecht zugeordnet, sodass jeder Spieler die Chance hat, die Endrunde zu erreichen. Diese erreichst du wenn du nach der Vorrunde unter den Top 16 bist. Das aktuelle Ranking wird auf einer Tabelle angezeigt, sodass du jederzeit verfolgen kannst, auf welchem Platz du stehst.<br>
Die Endrunde spielst du mit einem fest zugelosten Partner. Nach dem bekannten K.O-System kannst du dich bis ins Endspiel kickern. Beide Teams die sich im Endspiel gegenüber stehen, qualifizieren sich für das große Finalturnier im Weser-Stadion am 10. März.
</p>        
        
        <h2 class="yellow">Preise – Was gibt es zu gewinnen?</h2>
          <p class="left">
Zu Beginn des Turniers erhält jeder Teilnehmer ein Starter-Paket, bestehend aus 3 Biermarken für gekühlte Haake-Beck 12 in der Eventlocation und einen dazu passenden Flaschenöffner, damit Du auch für den Abend gut versorgt bist. Die Gewinner-Teams der Vorrunde können attraktive Haake-Beck Preise gewinnen. Die Finalteams qualifizieren sich für das große Finale im Weser-Stadion und haben dort noch einmal die Möglichkeit exklusive Preise zu gewinnen.
</p>        

<h2 class="yellow">Finale – Jetzt wird es spannend!</h2>
          <p class="left">Das große Finale wird am 10. März im Weser-Stadion stattfinden.<br>
           Bei einmaliger Atmosphäre und Stimmung im VIP-Bereich des Stadions, suchen wir aus 24 Kicker-Spielern das beste Team in Bremen. Die Vorrunde wurde bereits gewonnen doch im Finale werden die Karten neu gemischt und jedes Team hat die Chance auf weitere attraktive und exklusive Preise.
Als besonderes Highlight hast Du die Chance Dich gegen einen Werder-Profi am Kickertisch zu beweisen.
</p>        

      </div>
      
      
    
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
