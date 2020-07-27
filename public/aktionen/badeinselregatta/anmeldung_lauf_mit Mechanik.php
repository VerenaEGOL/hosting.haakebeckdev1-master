<?php
require_once("../../include/app.php"); 

$eintrag = 0;
$error = '';

if($_POST['abschicken']) { 

  $vorname = $_POST['vorname'];
  $nachname = $_POST['nachname'];
  $email = $_POST['email'];
  $geburtstag = $_POST['geburtstag'];
  $strasse = $_POST['strasse'];
  $plz = $_POST['plz'];
  $ort = $_POST['ort'];
  $telefon = $_POST['tel'];
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

  if (empty($error)) {
    // Prüfung doppelter Teilnehmer --> //
    $num = 0;
    $sel = "  SELECT * 
              FROM `0_gwsp_badeinsel_lauf_2016` 
              WHERE email = '".$email."'";
    $result = mysql_query($sel,$conn);
    $num = mysql_num_rows($result);
    // <-- //
    if ($num == 0) {
      $insert="INSERT INTO `0_gwsp_badeinsel_lauf_2016` (
      `vorname`,            `nachname`,         `strasse`,          
      `plz`,                `ort`,              `email`,            
      `telefon`,            `geburtstag`,       `tnb`,
      `eintrage_zeitpunkt` 
      ) VALUES (
      '".$vorname."',       '".$nachname."',    '".$strasse."',     
      '".$plz."',           '".$ort."',         '".$email."',       
      '".$telefon."',       '".$geburtstag."',  '".$tnb."', 
      '".time()."'  )";
      $erfolg = mysql_query($insert,$conn);
      if ($erfolg)
        $eintrag = 1;
    } else {
      $error .= 'Sie haben sich bereits für das Gewinnspiel eingetragen<br>';
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
        <h1 class="margin30">HAAKE-BECK BadeinselLauf®<br>Verlosung der Startplätze


</h1>
          <div class="trennline linefirst"></div>
          <a href="#"><img src="/images/teaser/badeinsellauf.jpg" class="visual" title="" alt="HAAKEBECK" /></a>
          <div class="trennline linelast"></div>
          <h2 class="yellow">Schnell an der Verlosung teilnehmen!

</h2>
          <p class="center">Auch in diesem Jahr wieder dabei: Der Haake-Beck BadeinselLauf®.
Es gilt, die Weser auf bis zu 100 Badeinseln zu überqueren – und für jede geschaffte Insel gibt es für den Läufer einen Liter frisches Haake-Beck! Teilnahmeplätze für den Haake-Beck BadeinselLauf® könnt ihr hier ergattern. </p>        
        
      </div>

      </div>
      
    
      </div>




         
      
    

      
 <div class="fullteaser backgroundfull">
      
        
      <div class="teaserinner">
      
      
          
          
          <form action="/aktionen/badeinselregatta/anmeldung_lauf.php" method="post" accept-charset="uft-8">
            <h2 class="yellow">Jede Insel ein Liter Haake-Beck!</h2>
              <?php if($eintrag ==1) { ?> 
              <p class="bodytext">Vielen Dank für deine Teilnahme. Wir wünschen dir viel Glück!</p>
              <p><strong>Haake-Beck Newsletter</strong><br><br>
                Du möchtest regelmäßig das Neueste über Haake-Beck erfahren? Dann trage dich in unseren Newsletter ein.<br><br>
                <a href="/newsletter/">Zur Newsletter-Anmeldung</a><br><br>
                <?php  } else { ?> 
                <p class="center">Trage deine Daten ein und ergattere einen der begehrten Startplätze.<br><br></p>
                <?php if (!empty($error)) { ?>
                <p><b>Fehler:</b><br><?= $error ?><br></p>
                <?php } ?>

                <p><b>Deine Daten:</b></p>
                <div class="twoculumform marginrightdoppel">


                  <input type="text" name="vorname" value="<?= $vorname; ?>" class="formfelder inputfelder margintop"  placeholder="Vorname*" />
                  <input type="text" name="nachname"  value="<?= $nachname; ?>" class="formfelder inputfelder margintop" placeholder="Nachname*" />
                  <input type="text" name="email"  value="<?= $email; ?>" class="formfelder inputfelder margintop" placeholder="E-Mailadresse*" />
                  <input type="text" name="geburtstag" value="<?= $geburtstag; ?>" class="formfelder inputfelder margintop" placeholder="Geburtsdatum* TT.MM.JJJJ" />
                  <div class="clear"></div>

                </div>

                <div class="twoculumform">

                  <input type="text" name="strasse" class="formfelder inputfelder margintop" placeholder="Straße / Hausnummer" value="<?= $strasse; ?>" />
                  <input type="text" name="plz" value="<?= $plz; ?>" class="formfelder inputfelder margintop" placeholder="Postleitzahl" />
                  <input type="text" name="ort" value="<?= $ort; ?>" class="formfelder inputfelder margintop" placeholder="Ort" />
                  <input type="text" name="tel" value="<?= $telefon; ?>" class="formfelder inputfelder margintop" placeholder="Telefon tagsüber" />
                </div>
                <div class="clear"></div>
                
                <div class="twoculumform">
                  <div class="clear"></div>

                  <p><br><input type="checkbox" name="tnb" class="margintop" value="1" <?php if ($tnb == '1') echo 'checked'; ?>/> Ich habe die Teilnahmebedingungen und die <a href="/datenschutz/" >Datenschutzerklärung</a> gelesen und akzeptiert.</p>
                  <div class="clear"></div>
                </div>
                <div class="twoculumform"><br>

                  <p class="marginright marginleft margintop">*Pflichtangaben</p>
                  <button type="submit" name="abschicken" value="senden" class="marginright marginleft margintop regular">Abschicken</button>



                </div>
                <?php } ?>
                <div class="clear"></div>
                

              </form>             
        
      </div>
      
      
    
      </div>
    
      <div class="clear"></div>
        <?php require_once("../../include/teaser-badeinselregatta.php"); ?>


      <div class="clear"></div>

      <div class="fullteaser backgroundfull">
      
      <div class="teaserinner">
      
      
      <h2 class="yellow">Teilnahmebedingungen</h2>
      <div id="slider" class="owl-carousel">

        <div>
          <p>
            1. Veranstalter des Haake-Beck BadeinselLauf® 2016 ist die Anheuser-Busch InBev Deutschland GmbH & Co. KG, Am Deich 18/19, 28199 Bremen.
            <br /><br />
            2. Die Teilnahme ist kostenlos. Teilnehmen können alle Personen ab 18 Jahren, ausgenommen Mitarbeiter der beteiligten Unternehmen sowie ihre Angehörigen. Der Rechtsweg, eine Barauszahlung sowie die Übertragung des Gewinns sind ausgeschlossen.
            <br /><br />
            3. Eine Teilnahme im Namen von Dritten, z. B. durch Gewinnspielservice-Anbieter, ist unzulässig. Die Anheuser-Busch InBev Deutschland GmbH & Co. KG behält sich in diesen Fällen den Ausschluss der betreffenden Teilnehmer vor.  
            <br /><br />
            4. Das Gewinnspiel startet am 13.04.2016. Bewerbungsschluss ist der 01.07.2016 um 23:59h.
            <br /><br>
            5. Die Gewinner werden per Losverfahren ausgewählt und schriftlich/telefonisch benachrichtigt. Meldet sich ein Gewinner nicht innerhalb von 14 Tagen nach dem Absenden der Benachrichtigung, so verfällt sein Anspruch auf den Gewinn und es wird ein neuer Gewinner ermittelt.   
            <br />
          </p>                   
      </div>

      <div>
          <p>
            6. Zu gewinnen gibt es 10 Startplätze für den Haake-Beck BadeinselLauf® am 04.07.2016.
            <br /><br />
            7. Die Teilnahme erfolgt grundsätzlich auf eigene Gefahr. Schäden werden nicht ersetzt, soweit sie nicht auf Vorsatz oder grobe Fahrlässigkeit des Veranstalters oder des eingesetzten Hilfspersonals beruhen. 
            <br /><br />
            8. Wer schon mal dabei war, darf nicht mehr teilnehmen: Aber natürlich mitfeiern!
            <br /><br />
            9. Die Namen der teilnehmenden Gewinner werden zwecks Sicherstellung der einmaligen Teilnahme durch die Anheuser-Busch InBev Deutschland GmbH & Co. KG in eine fortlaufende Teilnehmerliste aufgenommen. Die Teilnehmer stimmen dieser Datenspeicherung zu. Alle weiteren persönlichen Daten werden nach Durchführung der Veranstaltung gelöscht. 
            <br /><br />
            10. Alle Bild- Media- und Werberechte im Zusammenhang mit dem Event Haake-Beck BadeinselRegatta® 2016 und dem Event Haake-Beck BadeinselLauf® 2016 stehen ausschließlich der Anheuser-Busch InBev Deutschland GmbH & Co. KG zu. 
            <br />
          </p>                 
      </div>
      <div>
          <p>
            11. Die Anheuser-Busch InBev Deutschland GmbH & Co. KG weist darauf hin, dass sie sich vorbehalten wird auf der Veranstaltung Bild- und Tonmaterial aufzunehmen und dieses für Werbezwecke und zur Veröffentlichung zu verwenden. Sollten die Teilnehmer mit diesem Umstand nicht einverstanden sein, müssen diese  schriftlich vor Ihrer Teilnahme an der Veranstaltung widersprechen. 
            Ansonsten erklären sich die Teilnehmer damit einverstanden, dass bei der Veranstaltung Bildmaterial aufgenommen und werblich verwendet wird. 
            <br />
            Die Teilnehmer erklären sich weiter unwiderruflich damit einverstanden, dass die von ihnen gefertigten Aufnahmen in unveränderter oder veränderter Form von der Anheuser-Busch InBev Deutschland GmbH & Co. KG  und allen anderen Gesellschaften der AB InBev Gruppe sachlich, zeitlich und räumlich unbegrenzt für alle in Betracht kommenden Nutzungszwecke (insbesondere Marketing, Werbe- und PR- Zwecke z.B. durch Veröffentlichung auf der Homepage von Haake-Beck) vervielfältigt, verbreitet, ausgestellt und öffentlich wiedergegeben werden. Diese Einwilligung umfasst auch die Digitalisierung und elektronische Bearbeitung, die Retuschierung sowie die Verwendung der Bildnisse für Montagen.
            Die Teilnehmer verzichten auf ihre Namensnennung, sind aber damit einverstanden, dass ihr Name bei der Verwendung der Aufnahmen genannt wird.
            <br />
            Die Teilnehmer bestätigen unwiderruflich, dass ihnen durch die Abgabe dieser Erklärung kein Vergütungsanspruch gegenüber der Anheuser-Busch InBev Deutschland GmbH & Co. KG  und allen anderen Gesellschaften der AB InBev Gruppe entsteht. Alle Ansprüche auf Gegenleistungen sind durch die Zurverfügungstellung des Gewinns abgegolten. 
            <br />
          </p>                 
        </div>
        <div>
          <p>
            12. Die Anheuser-Busch InBev Deutschland GmbH & Co. KG behält sich das Recht vor, die Verlosung ganz oder teilweise, ohne vorherige Benachrichtigung zu ändern, einzustellen oder auszusetzen, falls unvorhergesehene Umstände eintreten. Zu diesen Umständen zählen insbesondere, aber nicht ausschließlich, das Auftreten eines Computervirus, eines Programmfehlers, nicht autorisiertes Eingreifen Dritter, oder mechanische oder technische Probleme, die außerhalb der Kontrolle und Einflussmöglichkeit von der Anheuser-Busch InBev Deutschland GmbH & Co. KG liegen. 
            <br /><br />            
            13. Verstößt ein Teilnehmer gegen diese Teilnahmebedingungen oder macht er unzutreffende Angaben, kann ihn Anheuser-Busch InBev Deutschland GmbH & Co. KG von der Teilnahme ausschließen, ohne hierfür Gründe angeben zu müssen. 
            <br /><br />    
            14. Mit der Teilnahme am Gewinnspiel erklärt sich der Teilnehmer mit diesen Teilnahmebedingungen einverstanden.
            <br /><br />    
            15. Etwaige Rechte aus dem Rechtsverhältnis, das diesen Teilnahmebedingungen zu Grunde liegt, sind für den Teilnehmer nicht auf Dritte übertragbar.   
            <br /><br />    
            16. Es gilt das Recht der Bundesrepublik Deutschland. Der Rechtsweg ist ausgeschlossen.
          </p>                   
        </div>

     
      
      </div>
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
