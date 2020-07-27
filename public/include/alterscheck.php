<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLGCJNW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php 
$alterok = isset($_SESSION['alterok']) ? (int)$_SESSION['alterok'] : 0;
if (! $alterok) {
?>
<div id="overlay" style="display: block;">
    <div id="age-check">
        <div class="header">
            <img src="/images/hb-logo-quer.png" height="60" class="logo_alterscheck" alt="HAAKEBECK" title="" />
            <h2>Altersüberprüfung</h2>
        </div>
        <div class="body">
            <p>HAAKE-BECK unterstützt ausschließlich legalen und verantwortungsbewussten Genuss von Bier. Wir bitten dich deshalb, zum Besuch dieser Seite zu bestätigen, dass du mindestens 18 Jahre alt bist.</p>
            <h3>Bitte gebe dein Geburtsdatum ein:</h3>
            <form id="age-form" name="age_check" action="#" method="post">
                <input autofocus class="age-input" type="number" size="2" maxlength="2" name="tag" id="check_age_tag" tabindex="1" placeholder="TT" />
                <input class="age-input" type="number" size="2" maxlength="2" name="monat" id="check_age_monat" tabindex="2" placeholder="MM" />
                <input class="age-input" type="number" size="4" maxlength="4" name="jahr" id="check_age_jahr" placeholder="JJJJ" />
                <button id="submit-age" tabindex="5">Absenden</button>
            </form>
        </div>
        <div class="footer">
            <p>&copy; <?= date("Y") ?> Haake-Beck AG<br />Mit dem Absenden dieses Formulars erklären Sie sich mit den <a href="/nutzung/index.php">Nutzungsbedingungen</a> und der <a href="/datenschutz/index.php">Datenschutzerklärung</a> einverstanden.</p><br />
        </div>
    </div>
</div>
</div>
<?php } ?>
<noscript>
<div>
    <div class="info_javascript_disabled">Diese Webseite nutzt Javascript zur optimalen Darstellung der Webseite. Bitte aktivieren Sie in Ihrem Browser Javascript.
    </div>
    <div class="info_javascript_aktivieren">
        <b>Firefox</b><br />Klicken Sie in der obersten Men&uuml;leiste auf Bearbeiten / Einstellungen oder Extras / Einstellungen.<br />
        Hier aktivieren Sie unter Inhalt den Punkt JavaScript aktivieren und klicken Sie OK.<br />
        <br />
        <b>Internet Explorer</b><br />
        Klicken Sie in der obersten Men&uuml;leiste auf Extras / Internetoptionen.<br />
        Dort klicken Sie unter Sicherheit entweder auf Standardstufe, oder Sie w&auml;hlen Stufe anpassen und aktivieren dann unter Scripting den Punkt Active Scripting Aktivieren.<br />
        Best&auml;tigen Sie mit OK.<br />
        <br />
        <b>Google Chrome</b><br />
        Klicken Sie oben rechts auf das Schraubenschl&uuml;sselsymbol und w&auml;hlen Sie Einstellungen.<br />
        Dort klicken Sie unter Details auf Inhaltseinstellungen und lassen Sie dort unter JavaScript dessen Ausf&uuml;hrung zu.<br />
        <br />
        <b>Opera</b><br />
        Klicken Sie in der obersten Men&uuml;leiste auf Extras / Einstellungen.<br />
        Unter Erweitert / Inhalte setzen Sie ein H&auml;kchen bei JavaScript aktivieren und klicken Sie dann<br />
        <br />
        <b>Mozilla</b><br />
        Klicken Sie in der obersten Men&uuml;leiste auf Edit / Preferences.<br />
        Unter dem Punkt Advanced / Scripts &amp; Plugins kreuzen Sie Navigator an. Klicken Sie nun auf OK. OK.
    </div>
</div>
</noscript>
