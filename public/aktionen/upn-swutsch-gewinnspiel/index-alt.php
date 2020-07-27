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
                               
                                    <p class="center">Am 06. Dezember 2017 geht Werder Up´n Swutsch in die 10. Runde. Im „Hopfen &amp; Schmalz“ empfängt Lou Richter den Werder Bremen Hattrick Star Max Kruse zur Jubiläumsfolge. Wenn Du dir und einer Begleitperson einen der begehrten Plätze inklusive Haake-Beck Freibier sichern willst, musst Du einfach nur an unserem Gewinnspiel teilnehmen.
                                        <br>
                                        <br> Die Teilnahme ist ganz einfach: Beantworte die Frage und trage Deine Daten in die dafür vorgesehenen Felder ein und mit ein bisschen Glück bist Du am 06. Dezember im „Hopfen &amp; Schmalz“ dabei!<br><bR> <strong>Das Gewinnspiel ist beendet. Die Gewinner sind: </strong><br>Marcel  R. aus Bremen<br>
Jessica  S. aus Bremen <br>
Florian  H. aus Osnabrück</p>
                                   
                                  
                                  
                                    <div class="clear"></div>
                                    
                                    
                                    
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
               
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