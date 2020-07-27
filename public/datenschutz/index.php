<?php
require_once("../include/app.php");
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <?php $pagetitle = 'Datenschutz';
    require_once("../include/head.php"); ?>
    <meta name="description" content="#">
    <script>
        $(document).ready(function () {
            $("#slider").owlCarousel({
                navigation: true,
                slideSpeed: 600,
                paginationSpeed: 400,
                singleItem: true,
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
<?php /*?> <?php require_once('../include/alterscheck.php');?><?php */ ?>
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
            <div class="teaser_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK"/></div>
            <div class="teaserinner">
                <h1 class="margin30">Haake-Beck<br>Datenschutz</h1>
                <div class="trennline linefirst"></div>
                <img src="/images/visuals/start-placeholder.jpg" class="visual" title="" alt="HAAKEBECK Datenschutz"/>
                <div class="trennline linelast"></div>
                <h2 class="yellow">Datenschutzerklärung</h2>
                <p class="center">
                    Sehr geehrter Nutzer/innen,
                    <br>
                    vielen Dank für Ihren Besuch auf unserer Website.
                    <br>
                    Damit Sie sich auf unserer Website sicher und wohl fühlen, geben Ihnen die folgenden Informationen
                    einen umfassenden Überblick darüber, wie wir mit Ihren personenbezogenen Daten umgehen. Diese
                    Datenschutzerklärung soll Sie darüber informieren, wie wir Ihre personenbezogenen Daten erheben,
                    verwenden und übermitteln.
                </p>
            </div>
        </div>
        <div class="fullteaser backgroundfull">
            <div class="teaser_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK"/></div>
            <div class="teaserinner">
                <div id="marlin-pp"></div>
                <script>
                    (document.head || document.getElementsByTagName("head")[0]).appendChild((function () {
                        var s = document.createElement('script');
                        s.src = "<?php echo getenv('MARLINSCRIPTS_PP');?>";
                        s.setAttribute('data-domain', 'https://haake-beck.de')
                        s.setAttribute('id', 'legalAppSdk');
                        return s;
                    })());
                </script>
            </div>
        </div>
        <div class="clear"></div>
        <?php require_once '../include/teaser/yellow_produkte.php'; ?>
        <?php require_once("../include/footer.php"); ?>
    </div>
    <div class="grid-m4"></div>
    <div class="grid-c4"> <?php $product = 'Pils';
        require_once("../include/sidebar.php"); ?>
    </div>
    <?php require_once("../include/js.php"); ?>
</body>
</html>