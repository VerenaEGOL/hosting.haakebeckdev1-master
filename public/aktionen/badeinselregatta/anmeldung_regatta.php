<?php
require_once("../../include/app.php"); 

$eintrag = 0;
$error = '';

if($_POST['abschicken']) { 

  $team = $_POST['team'];
  $vorname = $_POST['vorname'];
  $nachname = $_POST['nachname'];
  $email = $_POST['email'];
  $geburtstag = $_POST['geburtstag'];
  $strasse = $_POST['strasse'];
  $plz = $_POST['plz'];
  $ort = $_POST['ort'];
  $telefon = $_POST['tel'];
  $mg_vorname = $_POST['mg_vorname'];
  $mg_nachname = $_POST['mg_nachname'];
  $mg_email = $_POST['mg_email'];
  $mg_geburtstag = $_POST['mg_geburtstag'];
  $mg_strasse = $_POST['mg_strasse'];
  $mg_plz = $_POST['mg_plz'];
  $mg_ort = $_POST['mg_ort'];
  $mg_telefon = $_POST['mg_tel'];
  $tnb = $_POST['tnb'];

  if (empty($vorname))
    $error .= "Bitte gib deinen Vornamen an.<br>";
  if (empty($nachname))
    $error .= "Bitte gib deinen Nachnamen an.<br>";
  if (empty($email) || !preg_match('/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD', $email))
    $error .= "Bitte gib deine korrekte Mail-Adresse an.<br>";
  if (empty($geburtstag))
    $error .= "Bitte gib dein Geburtsdatum an.<br>";
  if ($tnb != 1)
    $error .= "Bitte stimme den Teilnahmebedingungen und den Datenschutzbedingungen zu.<br>";

  if (empty($mg_vorname))
    $error .= "Bitte gib den Vornamen deines Teammitglieds an.<br>";
  if (empty($mg_nachname))
    $error .= "Bitte gib den Nachnamen deines Teammitglieds an.<br>";
  if (empty($mg_email) || !preg_match('/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD', $email))
    $error .= "Bitte gib die korrekte Mail-Adresse deines Teammitglieds an.<br>";
  if (empty($mg_geburtstag))
    $error .= "Bitte gib das Geburtsdatum deines Teammitglieds an.<br>";

  if (empty($error)) {
    // Prüfung doppelter Teilnehmer --> //
    $num = 0;
    $sel = "  SELECT * 
              FROM `0_gwsp_badeinsel_regatta_2016` 
              WHERE email IN ('".$email."', '".$mg_email."') OR mg_email IN ('".$email."', '".$mg_email."')";
    $result = mysql_query($sel,$conn);
    $num = mysql_num_rows($result);
    // <-- //
    if ($num == 0) {
      $insert="INSERT INTO `0_gwsp_badeinsel_regatta_2016` (
      `team`,             `vorname`,            `nachname`,
      `strasse`,          `plz`,                `ort`,
      `email`,            `telefon`,            `geburtstag`,
      `mg_vorname`,       `mg_nachname`,        `mg_strasse`, 
      `mg_plz`,           `mg_ort`,             `mg_email`,
      `mg_telefon`,       `mg_geburtstag`,      `tnb`,
      `eintrage_zeitpunkt` 
      ) VALUES (
      '".$team."',        '".$vorname."',       '".$nachname."',   
      '".$strasse."',     '".$plz."',           '".$ort."', 
      '".$email."',       '".$telefon."',       '".$geburtstag."', 
      '".$mg_vorname."',  '".$mg_nachname."',   '".$mg_strasse."',   
      '".$mg_plz."',      '".$mg_ort."',        '".$mg_email."',     
      '".$mg_telefon."',  '".$mg_geburtstag."', '".$tnb."', 
      '".time()."'  )";
      $erfolg = mysql_query($insert,$conn);
      if ($erfolg)
        $eintrag = 1;
    } else {
      $error .= 'Ihr habt euch bereits für das Gewinnspiel eingetragen<br>';
    }    
  }
}



?>
<!DOCTYPE html>
<html lang="de">
<head>

<?php $pagetitle='BadeinselRegatta'; require_once("../../include/head.php"); ?>
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
      
      
      
      
     

      <div>
        <h1 class="margin30">HAAKE-BECK BadeinselRegatta®  <br>am 23. Juli 2016


</h1>
          <div class="trennline linefirst"></div>
          <a href="#"><img src="/images/visuals/BIR.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
          <div class="trennline linelast"></div>
          <h2 class="yellow">Am 23. Juli 2016 ist es wieder soweit
</h2>
          <p class="center">Die Haake-Beck BadeinselRegatta® ruft zum alljährlichen Paddelwettbewerb auf. In diesem Jahr gehen 117 Teams à 2 Personen an den Start und paddeln um die Wette. Anschließend gibt es abends am Café Sand die Party des Sommers!</p>        
        
      </div>

      </div>
      
    
      </div>




         
      
    

      
 <div class="fullteaser backgroundfull">
      
        
      <div class="teaserinner">
      
      
          <h2 class="yellow">Verlosung von Startplätzen</h2><p class="center">Die Verlosung ist beendet. Die Gewinner werden hier demnächst bekannt gegeben.
</p> 


          
         
        
      </div>
      
      
    
      </div>
    
      <div class="clear"></div>

        <?php require_once("../../include/teaser-badeinsellauf.php"); ?>


     
      <div class="clear"></div>

    <?php require_once("../../include/footer.php"); ?>
      
      	
    
  </div>
  <div class="grid-m4"></div>
  <div class="grid-c4"> <?php $product = 'Pils'; require_once("../../include/sidebar.php"); ?>
	</div>

<?php require_once("../../include/js.php"); ?>

</body>
</html>
