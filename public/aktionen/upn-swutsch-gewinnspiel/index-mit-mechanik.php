<?php
require_once '../../include/app.php';

$error = '';
$eintrag = 0;
$table = '2017_11_22_upn_swutsch';

$tnb = isset($_POST['tnb']) ? (int) $_POST['tnb'] : 0;
$plz = isset($_POST['plz']) ? strip_tags(trim($_POST['plz'])) : '';
$ort = isset($_POST['ort']) ? strip_tags(trim($_POST['ort'])) : '';
$email = isset($_POST['email']) ? strip_tags(trim($_POST['email'])) : '';
$anrede = isset($_POST['anrede']) ? strip_tags(trim($_POST['anrede'])) : '';
$submit = isset($_POST['submit']) ? strip_tags(trim($_POST['submit'])) : '';
$antwort = isset($_POST['antwort']) ? strip_tags(trim($_POST['antwort'])) : '';
$vorname = isset($_POST['vorname']) ? strip_tags(trim($_POST['vorname'])) : '';
$telefon = isset($_POST['telefon']) ? strip_tags(trim($_POST['telefon'])) : '';
$strasse = isset($_POST['strasse']) ? strip_tags(trim($_POST['strasse'])) : '';
$nachname = isset($_POST['nachname']) ? strip_tags(trim($_POST['nachname'])) : '';
$geburtstag = isset($_POST['geburtstag']) ? strip_tags(trim($_POST['geburtstag'])) : '';

if ($submit) {
    if (empty($antwort)) {
        $error .= 'Bitte wähle eine Antwort aus.<br>';
    }

    if (empty($vorname)) {
        $error .= 'Bitte gib deinen Vornamen an.<br>';
    }

    if (empty($nachname)) {
        $error .= 'Bitte gib deinen Nachnamen an.<br>';
    }

    if (! filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $error .= 'Bitte gib deine korrekte Mail-Adresse an.<br>';
    }

    if (($date = valid_date($geburtstag)) === false) {
        $error .= 'Bitte gib dein Geburtsdatum an.<br>';
    }

    if (! $tnb) {
        $error .= 'Bitte stimme den Teilnahmebedingungen und den Datenschutzbedingungen zu.<br>';
    }

    $stmt = $pdo->prepare('select id from ' . $table . ' where email = :email');
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount()) {
        $error .= 'Sie haben bereits am Gewinnspiel teilgenommen.<br>';
    }

    if (empty($error)) {
        try {
            $stmt = $pdo->prepare('insert into ' . $table . ' (antwort, anrede, vorname, nachname, strasse, plz, ort, email, telefon, geburtstag) values (:antwort, :anrede, :vorname, :nachname, :strasse, :plz, :ort, :email, :telefon, :geburtstag)');
            $stmt->bindValue(':antwort', $antwort);
            $stmt->bindValue(':anrede', $anrede);
            $stmt->bindValue(':vorname', $vorname);
            $stmt->bindValue(':nachname', $nachname);
            $stmt->bindValue(':strasse', $strasse);
            $stmt->bindValue(':plz', $plz);
            $stmt->bindValue(':ort', $ort);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':telefon', $telefon);
            $stmt->bindValue(':geburtstag', $date);
            $stmt->execute();
            $eintrag = 1;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
?>
    <!DOCTYPE html>
    <html lang="de">

    <head>
        <?php $pagetitle = 'Werder Up`n Swutsch Gewinnspiel'; require_once '../../include/head.php'; ?>
        <meta name="description" content="Gewinne Karten für Wrder up´n Swutsch">
        <script>
        $(document).ready(function() {
            $("#slider").owlCarousel({

                navigation: false,
                slideSpeed: 600,
                paginationSpeed: 400,
                singleItem: true,
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
        <?php require_once '../../include/alterscheck.php'; ?>
        <div class="grid margtop">
            <div class="grid-m1"></div>
            <div class="grid-c1">
                <div class="navigation-wrapper">
                    <?php require_once '../../include/navigation.php'; ?>
                    <?php require_once '../../include/socialbar.php'; ?>
                </div>
            </div>
            <div class="grid-m2"></div>
            <div class="grid-full">
                <div class="fullteaser backgroundfull">
                    <div class="teaser_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
                    <div class="teaserinner">
                        <div>
                            <div>
                                <h1 class="margin30">HAAKE-BECK<br>
                Werder up’n Swutsch - Gewinnspiel

              </h1>
                                <div class="trennline linefirst"></div>
                                <img src="/images/visuals/17-11-swutsch.jpg" class="visual" title="" alt="HAAKEBECK" />
                                <div class="trennline linelast"></div>
                                <h2 class="yellow">Tickets gewinnen

              </h2>
                                <form action="/aktionen/upn-swutsch-gewinnspiel/" method="post" accept-charset="uft-8">
                                    <p class="center">Am 06. Dezember 2017 geht Werder Up´n Swutsch in die 10. Runde. Im „Hopfen &amp; Schmalz“ empfängt Lou Richter den Werder Bremen Hattrick Star Max Kruse zur Jubiläumsfolge. Wenn Du dir und einer Begleitperson einen der begehrten Plätze inklusive Haake-Beck Freibier sichern willst, musst Du einfach nur an unserem Gewinnspiel teilnehmen.
                                        <br>
                                        <br> Die Teilnahme ist ganz einfach: Beantworte die Frage und trage Deine Daten in die dafür vorgesehenen Felder ein und mit ein bisschen Glück bist Du am 06. Dezember im „Hopfen &amp; Schmalz“ dabei! </p>
                                    <?php if ($eintrag == 1) {
    ?>
                                    <br />
                                    <p class="center">Vielen Dank für deine Teilnahme. Wir wünschen dir viel Glück!
                                        <br>
                                        <bR><strong>Haake-Beck Newsletter</strong>
                                        <br>
                                        <br> Du möchtest regelmäßig das Neueste über Haake-Beck erfahren? Dann trage dich in unseren Newsletter ein.
                                        <br>
                                        <br>
                                        <a href="/newsletter/" class="regular">Zur Newsletter-Anmeldung</a></p>
                                    <br>
                                    <br>
                                    <?php 
} else {
    ?>
                                    <?php if (!empty($error)) {
        ?>
                                    <br />
                                    <p><b>Fehler:</b>
                                        <br>
                                        <?= $error ?>
                                            <br>
                                    </p>
                                    <?php 
    } ?>
                                    <h2 class="yellow">Welche Rückennummer hat Max Kruse?</h2>
                                    <label class="marginbottom floatleft">Anwort*:</label>
                                    <input name="antwort" class="floatleft radiobuttons" value="1" type="radio" <?php echo ($antwort == 1) ? 'checked' : ''; ?> />
                                    <label class="floatleft">10</label>
                                    <input class="floatleft radiobuttons" name="antwort" value="2" type="radio" <?php echo ($antwort == 2) ? 'checked' : ''; ?> />
                                    <label class="floatleft">20</label>
                                    <div class="clear"></div>
                                    <label class="yellow floatleft marginbottom10">Anrede*:</label>
                                    <input name="anrede" class="floatleft radiobuttons" value="1" type="radio" <?php echo ($anrede == 1) ? 'checked' : ''; ?> />
                                    <label class="floatleft">Frau</label>
                                    <input class="floatleft radiobuttons" name="anrede" value="2" type="radio" <?php echo ($anrede == 2) ? 'checked' : ''; ?> />
                                    <label class="floatleft">Herr</label>
                                    <div class="clear"></div>
                                    <div class="twoculumform marginrightdoppel">
                                        <input type="text" name="vorname" value="<?php echo ($vorname) ? $vorname : ''; ?>" class="formfelder inputfelder margintop" placeholder="Vorname*" />
                                        <input type="text" name="nachname" value="<?php echo ($nachname) ? $nachname : ''; ?>" class="formfelder inputfelder margintop" placeholder="Nachname*" />
                                        <input type="text" name="email" value="<?php echo ($email) ? $email : ''; ?>" class="formfelder inputfelder margintop" placeholder="E-Mailadresse*" />
                                        <input type="text" name="geburtstag" value="<?php echo ($geburtstag) ? $geburtstag : ''; ?>" class="formfelder inputfelder margintop" placeholder="Geburtsdatum* TT.MM.JJJJ" />
                                        <div class="clear"></div>
                                    </div>
                                    <div class="twoculumform">
                                        <input type="text" name="strasse" class="formfelder inputfelder margintop" placeholder="Straße / Hausnummer" value="<?php echo ($strasse) ? $strasse : ''; ?>" />
                                        <input type="text" name="plz" value="<?php echo ($plz) ? $plz : ''; ?>" class="formfelder inputfelder margintop" placeholder="Postleitzahl" />
                                        <input type="text" name="ort" value="<?php echo ($ort) ? $ort : ''; ?>" class="formfelder inputfelder margintop" placeholder="Ort" />
                                        <input type="text" name="telefon" value="<?php echo ($telefon) ? $telefon : ''; ?>" class="formfelder inputfelder margintop" placeholder="Telefon tagsüber" />
                                    </div>
                                    <div class="clear"></div>
                                    <div class="clear"></div>
                                    <div class="twoculumform">
                                        <div class="clear"></div>
                                        <p>
                                            <br>
                                            <input type="checkbox" name="tnb" class="margintop" value="1" <?php echo $tnb ? 'checked' : '' ?>/> Ich habe die Teilnahmebedingungen und die <a href="/datenschutz/">Datenschutzerklärung</a> gelesen und akzeptiert.</p>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="twoculumform">
                                        <br>
                                        <p class="marginright marginleft margintop">*Pflichtangaben</p>
                                        <button type="submit" name="submit" value="senden" class="marginright marginleft margintop regular">Abschicken</button>
                                    </div>
                                    <?php 
} ?>
                                    <div class="clear"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <?php if ($eintrag != 1) {
    ?>
                <div class="fullteaser backgroundfull">
                    <div class="teaser_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
                    <?php include '../../include/gen/touch_info_full.php'; ?>
                    <div class="teaserinner">
                        <h1 class="margin30">TEILNAHMEBEDINGUNGEN</h1>
                        <div id="slider" class="owl-carousel">
                            <div class="produebersicht">
                                <p>1.Veranstalter des Gewinnspiels ist die Anheuser-Busch InBev Deutschland GmbH & Co. KG, Am Deich 18/19, 28199 Bremen. 2. Die Teilnahme ist kostenlos. Teilnehmen können alle Personen ab 18 Jahren, ausgenommen Mitarbeiter der beteiligten Unternehmen sowie ihre Angehörigen. Der Rechtsweg, eine Barauszahlung sowie die Übertragung des Gewinns sind ausgeschlossen. 3. Eine Teilnahme im Namen von Dritten, z. B. durch Gewinnspielservice-Anbieter, ist unzulässig. Die Anheuser-Busch InBev Deutschland GmbH & Co. KG behält sich in diesen Fällen den Ausschluss der betreffenden Teilnehmer vor. 4. Das Gewinnspiel startet am 28.11.2017. Teilnahmeschluss ist der 04.12.2017 um 23:59h. 5. Die Gewinner werden per Losverfahren ausgewählt und schriftlich/telefonisch benachrichtigt. Meldet sich ein Gewinner nicht innerhalb von 2 Tagen nach dem Absenden der Benachrichtigung, so verfällt sein Anspruch auf den Gewinn und es wird ein neuer Gewinner ermittelt. 6. Zu gewinnen gibt es 3x2 Tickets für die Teilnahme am Werder up´n Swutsch im „Hopfen & Schmalz“ am 06.12.2017 inklusive frei Haake-Beck vor Ort. 7. Alle Bild- Media- und Werberechte im Zusammenhang mit dem Event stehen ausschließlich der Anheuser-Busch InBev Deutschland GmbH & Co. KG zu. </p>
                            </div>
                            <div class="produebersicht">
                                <p>8. Die Anheuser-Busch InBev Deutschland GmbH & Co. KG weist darauf hin, dass sie sich vorbehalten wird auf der Veranstaltung Bild- und Tonmaterial aufzunehmen und dieses für Werbezwecke und zur Veröffentlichung zu verwenden. Sollten die Teilnehmer mit diesem Umstand nicht einverstanden sein, müssen diese schriftlich vor Ihrer Teilnahme an der Veranstaltung widersprechen. Ansonsten erklären sich die Teilnehmer damit einverstanden, dass bei der Veranstaltung Bildmaterial aufgenommen und werblich verwendet wird. Die Teilnehmer erklären sich weiter unwiderruflich damit einverstanden, dass die von ihnen gefertigten Aufnahmen in unveränderter oder veränderter Form von der Anheuser-Busch InBev Deutschland GmbH & Co. KG und allen anderen Gesellschaften der AB InBev Gruppe sachlich, zeitlich und räumlich unbegrenzt für alle in Betracht kommenden Nutzungszwecke (insbesondere Marketing, Werbe- und PR- Zwecke z.B. durch Veröffentlichung auf der Homepage von Haake-Beck) vervielfältigt, verbreitet, ausgestellt und öffentlich wiedergegeben werden. Diese Einwilligung umfasst auch die Digitalisierung und elektronische Bearbeitung, die Retuschierung sowie die Verwendung der Bildnisse für Montagen. Die Teilnehmer verzichten auf ihre Namensnennung, sind aber damit einverstanden, dass ihr Name bei der Verwendung der Aufnahmen genannt wird. Die Teilnehmer bestätigen unwiderruflich, dass ihnen durch die Abgabe dieser Erklärung kein Vergütungsanspruch gegenüber der Anheuser-Busch InBev Deutschland GmbH & Co. KG und allen anderen Gesellschaften der AB InBev Gruppe entsteht. Alle Ansprüche auf Gegenleistungen sind durch die Zurverfügungstellung des Gewinns abgegolten. </p>
                            </div>
                            <div class="produebersicht">
                                <p>9. Die Anheuser-Busch InBev Deutschland GmbH & Co. KG behält sich das Recht vor, die Verlosung ganz oder teilweise, ohne vorherige Benachrichtigung zu ändern, einzustellen oder auszusetzen, falls unvorhergesehene Umstände eintreten. Zu diesen Umständen zählen insbesondere, aber nicht ausschließlich, das Auftreten eines Computervirus, eines Programmfehlers, nicht autorisiertes Eingreifen Dritter, oder mechanische oder technische Probleme, die außerhalb der Kontrolle und Einflussmöglichkeit von der Anheuser-Busch InBev Deutschland GmbH & Co. KG liegen. 10. Verstößt ein Teilnehmer gegen diese Teilnahmebedingungen oder macht er unzutreffende Angaben, kann ihn Anheuser-Busch InBev Deutschland GmbH & Co. KG von der Teilnahme ausschließen, ohne hierfür Gründe angeben zu müssen. 11. Mit der Teilnahme am Gewinnspiel erklärt sich der Teilnehmer mit diesen Teilnahmebedingungen einverstanden. 12. Etwaige Rechte aus dem Rechtsverhältnis, das diesen Teilnahmebedingungen zu Grunde liegt, sind für den Teilnehmer nicht auf Dritte übertragbar. 13. Es gilt das Recht der Bundesrepublik Deutschland. Der Rechtsweg ist ausgeschlossen.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
} ?>
                <div class="grid-c2 coilteaser backgroundcoil firstcoil">
                    <?php require_once '../../include/columnteaser/HAAKEBECK-wasistdas.php'; ?>
                </div>
                <div class="grid-c2 coilteaser backgroundcoil secondcoil">
                    <?php require_once '../../include/columnteaser/HAAKEBECK-upnswutschvideo.php'; ?>
                </div>
                <div class="clear"></div>
                <?php require_once '../../include/footer.php'; ?>
            </div>
            <div class="grid-m4"></div>
            <div class="grid-c4">
                <?php $product = 'Pils'; require_once '../../include/sidebar.php'; ?>
            </div>
            <?php require_once '../../include/js.php'; ?>
    </body>

    </html>