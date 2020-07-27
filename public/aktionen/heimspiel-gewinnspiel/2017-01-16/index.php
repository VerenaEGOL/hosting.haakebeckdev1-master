<?php
require_once("../../../include/app.php"); 

$eintrag = 0;
$error = '';

if($_POST['abschicken']) { 
  $antwort = $_POST['antw'];
  $anrede = $_POST['anrede'];
  $v_name = $_POST['name1'];
  $n_name = $_POST['name2'];
  $email = $_POST['email'];
  $strasse = $_POST['strasse'];
  $plz = $_POST['plz'];
  $ort = $_POST['ort'];
  $telefon = $_POST['tel'];
  $geburtstag = $_POST['geburtstag'];
  $tnb = $_POST['tnb'];

  if (empty($antwort))
    $error .= "Bitte wähle eine Antwort aus.<br>";
  if (empty($v_name))
    $error .= "Bitte gib deinen Vornamen an.<br>";
  if (empty($n_name))
    $error .= "Bitte gib deinen Nachnamen an.<br>";
  if (empty($email) || !preg_match('/[äöüßa-z0-9._]+@[äöüßa-z0-9][äöüßa-z0-9.-]*[a-z0-9]+\.(ac|ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|asia|at|au|aw|ax|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cat|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gg|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|im|in|info|int|io|iq|ir|is|it|je|jm|jo|jobs|jp|ke|kg|kh|ki|km|kn|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mobi|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tel|tf|tg|th|tj|tk|tl|tm|tn|to|tp|tr|travel|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)/iU', $email))
    $error .= "Bitte gib deine korrekte Mail-Adresse an.<br>";
  if (empty($geburtstag))
    $error .= "Bitte gib dein Geburtsdatum an.<br>";
  if ($tnb != 1)
    $error .= "Bitte stimme den Teilnahmebedingungen und den Datenschutzbedingungen zu.<br>";

  if (empty($error)) {
    $insert="INSERT INTO `2017_01_16_Heimspiel` (
    `antw` ,
    `anrede` ,
    `v_name` ,
    `n_name` ,
    `strasse` ,
    `plz` ,
    `ort` ,
    `email` ,
    `telefon` ,
    `geburtstag` ,
    `eintrag` 
    ) VALUES (
    '".$antwort."','".$anrede."', '".$v_name."', '".$n_name."', '".$strasse."', '".$plz."', '".$ort."', '".$email."', '".$telefon."', '".$geburtstag."', '".time()."'  )";
    $erfolg = mysql_query($insert,$conn);
    if ($erfolg)
      $eintrag = 1;
    else 
      $error .= 'Du hast bereits am Gewinnspiel teilgenommen<br>';
  }
}



?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php $pagetitle='SV Werder Bremen - Gewinnspiel'; require_once("../../../include/head.php"); ?>
<meta name="description" content="Gewinne Karten für die Heimspiele vom SV Werder Bremen">
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
<?php require_once('../../../include/alterscheck.php');?>
<div class="grid margtop">
<div class="grid-m1"></div>
<div class="grid-c1">
  <div class="navigation-wrapper">
    <?php require_once("../../../include/navigation.php"); ?>
    <?php require_once("../../../include/socialbar.php"); ?>
  </div>
</div>
<div class="grid-m2"></div>
<div class="grid-full">
  <div class="fullteaser backgroundfull">
    <div class="teaser_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
    <div class="teaserinner">
      <div >
        <div>
          <h1 class="margin30">HAAKE-BECK<br>
            SV Werder Bremen - Gewinnspiel </h1>
          <div class="trennline linefirst"></div>
          <a href="#"><img src="/images/visuals/haake-beck-es-war-einmal.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
          <div class="trennline linelast"></div>
          <h2 class="yellow">Gewinne Karten für die Heimspiele vom SV Werder Bremen</h2>
          
            <p class="center">Beantworte die folgende Frage, trage deine Daten in die dafür vorgesehenen Felder ein und mit ein bisschen Glück bist du am 27.-29.01.2017 beim Spiel SV Werder Bremen vs. FC Bayern München dabei!<br><br>
            <strong>Das Gewinnspiel ist beendet. Die Gewinner sind: </strong><br>Sebastian H. aus Osnabrück<br>
Anja H. aus Friedeburg-Horsten</p>
           
           
         
        </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
  
  <div class="clear"></div>
  <?php require_once("../../../include/kader.php"); ?>
  <div class="clear"></div>
  <?php require_once("../../../include/footer.php"); ?>
</div>
<div class="grid-m4"></div>
<div class="grid-c4">
  <?php $product = 'Pils'; require_once("../../../include/sidebar.php"); ?>
</div>
<?php require_once("../../../include/js.php"); ?>
</body>
</html>
