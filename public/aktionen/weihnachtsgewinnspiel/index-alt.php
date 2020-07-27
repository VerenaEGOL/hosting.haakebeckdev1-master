<?php
require_once("../../include/app.php"); 

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
    $insert="INSERT INTO `2016_12_01_weihnachten` (
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
<?php $pagetitle='Weihnachtsgewinnspiel'; require_once("../../include/head.php"); ?>
<meta name="description" content="Gewinne mit dem Haake-Beck Weihnachtsgewinnspiel Karten für die Sixdays in Bremen!">
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
      <div >
        <div>
           <h1 class="margin30">HAAKE-BECK<br>
                Weihnachtsgewinnspiel

              </h1>
              <div class="trennline linefirst"></div>
              <img src="/images/visuals/weihnachten-3.jpg" class="visual" title="" alt="HAAKEBECK" />
              <div class="trennline linelast"></div>
              <h2 class="yellow">Gewinne Tickets für die SIXDAYS BREMEN</h2>
              <?php /*?> <form action="/aktionen/weihnachtsgewinnspiel/" method="post" accept-charset="uft-8"><?php */?>
              <p class="center">Vom 12. – 17. Januar 2017 verwandelt das Bremer 6-Tage-Rennen die Hansestadt in ein Mekka für Radsportbegeisterte und Partyfreunde. Passend dazu verlosen wir 5x2 Tickets für den Donnerstag, sowie 3x2 Tickets für den Freitag. Willst Du Dir und Deiner Begleitperson die Chance auf die begehrten Plätze sichern? Dann mach mit bei unserem Weihnachtsgewinnspiel!  
<br>
<br>
            <strong>Das Gewinnspiel ist beendet. Die Gewinner sind nun bekannt.</strong><br><br>
            <strong>Für Donnerstag gewinnen je 2 Tickets:</strong><br><br>
            Michael L. aus Bassum<br>
            Michelle L. aus Bremen<br>
            Sabine S. aus Stuhr<br>
            Werner W. aus Twistringen<br>
            Siegfried T. aus Delmenhorst<br><br>
            <strong>Für Freitag gewinnen je 2 Tickets:</strong><br><br> 
            Jennifer B. aus Bremen<br>
            Kristina R. aus Bremen<br>
            Arne J. aus Weyhe<br><br>
            <strong>Wir gratulieren ganz herzlich!</strong>
            </p>        

          <?php /*?>  <?php if($eintrag ==1) { ?>
            <br />
            <p class="center">Vielen Dank für Deine Teilnahme. Wir wünschen Dir viel Glück!<br><bR><strong>Haake-Beck Newsletter</strong><br>
              <br>
              Du möchtest regelmäßig das Neueste über Haake-Beck erfahren? Dann trage Dich in unseren Newsletter ein.<br>
              <br>
              <a href="/newsletter/" class="regular">Zur Newsletter-Anmeldung</a></p>
            <br>
            <br>
            <?php  } else { ?>
            <?php if (!empty($error)) { ?>
            <br />
            <p><b>Fehler:</b><br>
              <?= $error ?>
              <br>
            </p>
            <?php } ?>
            <h2 class="yellow">In die wievielte Runde gehen die SIXDAYS BREMEN 2017?</h2>
            <label class="marginbottom floatleft">Anwort*:</label>
            <input name="antw" class="floatleft radiobuttons" value="1"  type="radio" />
            <label class="floatleft">50</label>
            <input class="floatleft radiobuttons" name="antw" value="2"  type="radio" />
            <label class="floatleft">53</label>
            <div class="clear"></div>
            <label class="yellow floatleft marginbottom10">Anrede*:</label>
            <input name="anrede" class="floatleft radiobuttons" value="1"  type="radio" />
            <label class="floatleft">Frau</label>
            <input class="floatleft radiobuttons" name="anrede" value="2"  type="radio" />
            <label class="floatleft">Herr</label>
            <div class="clear"></div>
            <div class="twoculumform marginrightdoppel">
              <input type="text" name="name1" value="" class="formfelder inputfelder margintop"  placeholder="Vorname*" />
              <input type="text" name="name2"  value="" class="formfelder inputfelder margintop" placeholder="Nachname*" />
              <input type="text" name="email"  value="" class="formfelder inputfelder margintop" placeholder="E-Mailadresse*" />
              <input type="text" name="geburtstag" value="" class="formfelder inputfelder margintop" placeholder="Geburtsdatum* TT.MM.JJJJ" />
              <div class="clear"></div>
            </div>
            <div class="twoculumform">
              <input type="text" name="strasse" class="formfelder inputfelder margintop" placeholder="Straße / Hausnummer" value="" />
              <input type="text" name="plz" value="" class="formfelder inputfelder margintop" placeholder="Postleitzahl" />
              <input type="text" name="ort" value="" class="formfelder inputfelder margintop" placeholder="Ort" />
              <input type="text" name="tel" value="" class="formfelder inputfelder margintop" placeholder="Telefon tagsüber" />
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
            <div class="twoculumform">
              <div class="clear"></div>
              <p><br>
                <input type="checkbox" name="tnb" class="margintop" value="1" />
                Ich habe die Teilnahmebedingungen und die <a href="/datenschutz/" >Datenschutzerklärung</a> gelesen und akzeptiert.</p>
              <div class="clear"></div>
            </div>
            <div class="twoculumform"><br>
              <p class="marginright marginleft margintop">*Pflichtangaben</p>
              <button type="submit" name="abschicken" value="senden" class="marginright marginleft margintop regular">Abschicken</button>
            </div>
            <?php } ?>
            <div class="clear"></div>
          </form><?php */?>
        </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
  <?php if($eintrag != 1) { ?>
  <div class="fullteaser backgroundfull">
    <div class="teaser_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
    <?php include("../../include/gen/touch_info_full.php"); ?>
    <div class="teaserinner">
      <h1 class="margin30">TEILNAHMEBEDINGUNGEN</h1>
      <div id="slider" class="owl-carousel">
        <div class="produebersicht" style="text-align: justify;">
          <p>1.Veranstalter des Gewinnspiels ist die Anheuser-Busch InBev Deutschland GmbH & Co. KG, Am Deich 18/19, 28199 Bremen. <br><br>
2. Die Teilnahme ist kostenlos. Teilnehmen können alle Personen ab 18 Jahren, ausgenommen Mitarbeiter der beteiligten Unternehmen sowie ihre Angehörigen. Der Rechtsweg, eine Barauszahlung sowie die Übertragung des Gewinns sind ausgeschlossen. <br><br>
3. Eine Teilnahme im Namen von Dritten, z. B. durch Gewinnspielservice-Anbieter, ist unzulässig. Die Anheuser-Busch InBev Deutschland GmbH & Co. KG behält sich in diesen Fällen den Ausschluss der betreffenden Teilnehmer vor. <br><br>
4. Das Gewinnspiel startet am 01.12.2016. Teilnahmeschluss ist der 24.12.2016 um 23:59h. Die Gewinner werden im Januar 2017 bekannt gegeben.<br><br>
5. Die Gewinner werden per Losverfahren ausgewählt und schriftlich/telefonisch benachrichtigt. Meldet sich ein Gewinner nicht innerhalb von 4 Tagen nach dem Absenden der Benachrichtigung, so verfällt sein Anspruch auf den Gewinn und es wird ein neuer Gewinner ermittelt. <br><br>
6. Zu gewinnen gibt es 5x2 Tickets für Donnerstag, den 12.01.2017, sowie 3x2 Tickets für Freitag, den 13.01.2017 für die SIXDAYS BREMEN. <br><br>
7. Alle Bild- Media- und Werberechte im Zusammenhang mit dem Event stehen ausschließlich der Anheuser-Busch InBev Deutschland GmbH & Co. KG zu. </p>
        </div>
        <div class="produebersicht" style="text-align: justify;">
          <p>8. Die Anheuser-Busch InBev Deutschland GmbH & Co. KG weist darauf hin, dass sie sich vorbehalten wird auf der Veranstaltung Bild- und Tonmaterial aufzunehmen und dieses für Werbezwecke und zur Veröffentlichung zu verwenden. Sollten die Teilnehmer mit diesem Umstand nicht einverstanden sein, müssen diese schriftlich vor Ihrer Teilnahme an der Veranstaltung widersprechen. Ansonsten erklären sich die Teilnehmer damit einverstanden, dass bei der Veranstaltung Bildmaterial aufgenommen und werblich verwendet wird. 
            Die Teilnehmer erklären sich weiter unwiderruflich damit einverstanden, dass die von ihnen gefertigten Aufnahmen in unveränderter oder veränderter Form von der Anheuser-Busch InBev Deutschland GmbH & Co. KG und allen anderen Gesellschaften der AB InBev Gruppe sachlich, zeitlich und räumlich unbegrenzt für alle in Betracht kommenden Nutzungszwecke (insbesondere Marketing, Werbe- und PR- Zwecke z.B. durch Veröffentlichung auf der Homepage von Haake-Beck) vervielfältigt, verbreitet, ausgestellt und öffentlich wiedergegeben werden. Diese Einwilligung umfasst auch die Digitalisierung und elektronische Bearbeitung, die Retuschierung sowie die Verwendung der Bildnisse für Montagen. Die Teilnehmer verzichten auf ihre Namensnennung, sind aber damit einverstanden, dass ihr Name bei der Verwendung der Aufnahmen genannt wird. 
            Die Teilnehmer bestätigen unwiderruflich, dass ihnen durch die Abgabe dieser Erklärung kein Vergütungsanspruch gegenüber der Anheuser-Busch InBev Deutschland GmbH & Co. KG und allen anderen Gesellschaften der AB InBev Gruppe entsteht. Alle Ansprüche auf Gegenleistungen sind durch die Zurverfügungstellung des Gewinns abgegolten. </p>
        </div>
        <div class="produebersicht" style="text-align: justify;">
          <p>9. Die Anheuser-Busch InBev Deutschland GmbH & Co. KG behält sich das Recht vor, die Verlosung ganz oder teilweise, ohne vorherige Benachrichtigung zu ändern, einzustellen oder auszusetzen, falls unvorhergesehene Umstände eintreten. Zu diesen Umständen zählen insbesondere, aber nicht ausschließlich, das Auftreten eines Computervirus, eines Programmfehlers, nicht autorisiertes Eingreifen Dritter, oder mechanische oder technische Probleme, die außerhalb der Kontrolle und Einflussmöglichkeit von der Anheuser-Busch InBev Deutschland GmbH & Co. KG liegen. <br><br>
            10. Verstößt ein Teilnehmer gegen diese Teilnahmebedingungen oder macht er unzutreffende Angaben, kann ihn Anheuser-Busch InBev Deutschland GmbH & Co. KG von der Teilnahme ausschließen, ohne hierfür Gründe angeben zu müssen. <br><br>
            11. Mit der Teilnahme am Gewinnspiel erklärt sich der Teilnehmer mit diesen Teilnahmebedingungen einverstanden. <br><br>
            12. Etwaige Rechte aus dem Rechtsverhältnis, das diesen Teilnahmebedingungen zu Grunde liegt, sind für den Teilnehmer nicht auf Dritte übertragbar. <br><br>
            13. Es gilt das Recht der Bundesrepublik Deutschland. Der Rechtsweg ist ausgeschlossen.</p>
        </div>
      </div>
    </div>
  </div>
  <?php } ?><div class="clear"></div>
  <?php require_once("../../include/sixdays.php"); ?>
  <div class="clear"></div>
 
  <?php require_once("../../include/footer.php"); ?>
</div>
<div class="grid-m4"></div>
<div class="grid-c4">
  <?php $product = 'Pils'; require_once("../../include/sidebar.php"); ?>
</div>
<?php require_once("../../include/js.php"); ?>
</body>
</html>
