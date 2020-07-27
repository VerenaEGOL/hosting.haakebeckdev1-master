<?php require_once("../include/app.php"); ?>
<!DOCTYPE html>
<html lang="de">
<head>

<?php $pagetitle='Newsletter'; require_once("../include/head.php"); ?>
<meta name="description" content="#">
<meta name="description" content="Melden Sie sich für unseren Newsletter an.">
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
      
      
      
        <div>
        <h1 class="margin30">NUTZEN SIE DEN <br>
HAAKE-BECK NEWSLETTER</h1>
          <div class="trennline linefirst"></div>
         <img src="/images/visuals/start-placeholder.jpg" class="visual" title="" alt="HAAKEBECK" />
          <div class="trennline linelast"></div>
          <h2 class="yellow">Melden Sie sich kostenfrei an!</h2>
          <p class="center">Mit dem Haake-Beck Newsletter halten wir Sie immer auf dem Laufenden und informieren z.B. über neue Gewinnspiele und Aktionen! Keine Angst, es erwartet Sie keine Mailflut und der Newsletter kann jederzeit wieder abgemeldet werden.<br></p>        
        


      
     
      
      </div>
      </div>
      
    
      </div>



      <div class="fullteaser backgroundfull">


          <div class="teaserinner">

            <form action="http://156435.156429.eu2.cleverreach.com/f/156435-154094/wcs/" method="POST" target="_blank"> 
               <h3 class="marginbottom margintop">NEWSLETTER ANMELDUNG</h3>
              
                <div class="twoculumform marginrightdoppel">

                  <input type="text" class="formfelder inputfelder margintop10" placeholder="Ihre PLZ" name="1016417"/>
                  <input type="text" class="formfelder inputfelder margintop10" placeholder="Ihr Alter*" required="" name="1016418"/>
                  <input type="text" class="formfelder inputfelder margintop10" placeholder="E-Mailadresse*" required="" name="email"/>
                </div>
                <div class="twoculumform">
                  <input type="checkbox" class="floatleft marginleft marginright  margintop10" required="" name="einverstaendnis" id="checkbox"/>
                  <p class="justify small margintop10" id="bedingungen">Ich bin damit einverstanden, dass meine Angaben gemäß Art. 6 Abs. 1 Satz 1 lit. a DSGVO gespeichert und von der Anheuser Busch InBev Deutschland Gmbh & Co. KG, die für Marketing und Vertrieb der Haake-Beck Brauerei GmbH & Co KG zuständig ist, dazu verwendet werden, die Inhalte und Leistungen der Webseite zu verbessern und mir per E-Mail Informationen zu Produkten, Angeboten, Aktionen und Gewinnspielen zuzusenden. Für die Versendung der E-Mails setzen wir folgende Dienstleister ein: Clever Reach. Ich bin mir darüber bewusst, dass ich meine Einwilligung jederzeit widerrufen kann, ohne dass die Rechtmäßigkeit der aufgrund der Einwilligung bis zum Widerruf erfolgten Verarbeitung berührt wird. Ein Link hierzu findet sich am Ende jedes Newsletters. Ihre Daten werden nach Abbestellung gelöscht.
<br><br>*Pflichtangaben</p>
                  <p class=""><button type="submit" name="abschicken" value="senden" class="margintop regular" style="font-size:14px; margin-left: 40px;" id="anmelden">FÜR DEN NEWSLETTER ANMELDEN</button></p>
                </div>
                <div class="clear"></div>

                  
                  
                  

              </form>     

            </div>



          </div>

        <div class="fullteaser backgroundfull">


          <div class="teaserinner">

            <form method="post" action="http://156435.156429.eu2.cleverreach.com/f/156435-154094/wcu/" target="_blank">
              <h3 class="marginbottom margintop">NEWSLETTER ABMELDEN</h3>
                <div class="twoculumform marginrightdoppel">
                  <input type="text" class="formfelder inputfelder"  style="min-height:22px;" placeholder="Auszutragende E-Mailadresse" name="email"/>  
                </div>
                <div class="twoculumform">
                  <button type="submit" class="regular" style="font-size:14px; margin-left: 40px;" >NEWSLETTER ABMELDEN</button>
                </div>
                
                <div class="clear"></div>

            </form>

            </div>



          </div>
     
      
     
      <div class="clear"></div>
      
    <?php require_once("../include/footer.php"); ?>
      
        
    
  </div>
  <div class="grid-m4"></div>
  <div class="grid-c4"> <?php $product = 'Pils'; require_once("../include/sidebar.php"); ?>
  </div>

<?php require_once("../include/js.php"); ?>
        <script type="text/javascript">
          $(document).ready( function() {
            var hoehe = $('#bedingungen').height();
            $('#checkbox').css({ "margin-bottom": hoehe+'px'});
          });
        </script>

        <script type="text/javascript">
          $(document).ready( function() {
            var breite = $('#anmelden').outerWidth();
            console.log(breite);
            $('#abmelden').css({ "width": breite+'px'});
          });
        </script>
</body>
</html>
