<?php
  require_once("../include/app.php"); 
?>
<!DOCTYPE html>
<html lang="de">
<head>

<?php $pagetitle='FAQ'; require_once("../include/head.php"); ?>
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
      
      
      
     
       <h1 class="margin30">HAAKE-BECK<br>FRAGEN UND ANTWORTEN</h1>
          <div class="trennline linefirst"></div>
        <img src="/images/visuals/haake-beck-konatkt.jpg" class="visual" title="" alt="HAAKE-BECK Kontakt &amp; FAQs" />
        <div class="trennline linelast"></div>
          <h2 class="yellow">Antworten auf h&auml;ufig gestellte Fragen</h2>
          <p class="center">Hier lesen Sie h&auml;ufig gestellte Fragen. Und die Antworten gleich dazu.
Sollte Ihre Frage hier nicht beantwortet werden, dann nehmen
Sie bitte Kontakt mit unserem Support auf. </p>
          
          <div class="center margintop10">
<select class="selectfull" name="select_kontakt" onChange="show_kontakt(this.options[this.selectedIndex].value);">
                                            <option value="">Bitte w&auml;hlen Sie hier eine Frage</option>
                                            <option value="1">Au&szlig;endienst und Gastronomieinformation</option>
                                            <option value="2">Relevante Informationen f&uuml;r Gastronomen, Fachgro&szlig;h&auml;ndler und zuk&uuml;nftige Kunden </option>
                                            <option value="3">Brauereibesichtigung</option>
                                            <option value="4">Badeinselregatta &reg;</option>
                                            <option value="5">Fragen zu kostenlosen Werbegeschenken / Sammleranfragen</option>
                                            <option value="6">Sponsoring-Anfrage</option>
                                            <option value="7">Haake-Beck Logo und Produktabbildungen</option>
                                            <option value="8">Kauf von Spielerbecher aus dem Weser-Stadion</option>
                                            <option value="9">Zum Kontaktformular</option>
            </select>
                                        
                               <div id="kontakt_antwort">Hier finden Sie die Antwort.</div>
                                 <div class="faq_div" id="view_faq_1">Welcher Au&szlig;endienstmitarbeiter f&uuml;r dich zust&auml;ndig ist, erf&auml;hrst du in unserem Serviceportal. > <a href="http://www.ab-inbev.de/" target="_blank" class="text_link">Zum Serviceportal von Anheuser Busch InBev</a></div>
                                 <div class="faq_div" id="view_faq_2">Unser Dienstleistungs- und Informationsportal f&uuml;r Gastronomen, Fachgro&szlig;h&auml;ndler und zuk&uuml;nftige Kunden bietet umfassende Informationen &uuml;ber die Brauereien und Marken von InBev Deutschland. Dar&uuml;ber hinaus werden fachspezifische, gastronomierelevante Themen sowie aktuelle Trends und Entwicklungen in der Gastronomie beleuchtet. > <a href="http://www.ab-inbev.de/" target="_blank" class="text_link">Zum Serviceportal von Anheuser Busch InBev</a></div>
                                 <div class="faq_div" id="view_faq_3">Wenn du unsere Brauerei besichtigen m&ouml;chtest, findest du <a href="https://www.becks.de/#besucherzentrum?lang=german&p=Home" target="_blank" class="text_link">hier</a> alle relevanten Informationen sowie das entsprechende Anmeldeformular. </div>
                                 <div class="faq_div" id="view_faq_4">Wenn du Interesse an der Teilnahme der Badeinselregatta&reg; hast, musst du dich leider noch ein wenig gedulden. Die M&ouml;glichkeit sich zu bewerben startet voraussichtlich im April / Mai. Weitere Informationen dazu findest du rechtzeitig hier bei uns auf www.haake-beck.de oder &uuml;ber unseren Newsletter. Bitte beachte, dass die Teilnahme an der Badeinselregatta&reg; nur einmaling m&ouml;glich ist. Bewerbungen von Personen, die schon an der Badeinselregatta teilgenommen haben, k&ouml;nnen leider nicht beachtet werden. </div>
                                 <div class="faq_div" id="view_faq_5">Ein Unternehmen unserer Gr&ouml;&szlig;enordnung erh&auml;lt t&auml;glich eine Vielzahl an Anfragen nach kostenlosen Werbemitteln, Etiketten oder Untersetzern. Leider ist es uns nicht mehr m&ouml;glich dieser Vielzahl an Anfragen nachzukommen.</div>
                                 <div class="faq_div" id="view_faq_6">Wir freuen uns &uuml;ber dein Interesse an unserem Unternehmen. Leider ist es uns nicht m&ouml;glich, der Vielzahl von Anfragen nach Sponsoring nachzukommen. </div>
                                 <div class="faq_div" id="view_faq_7">S&auml;mtliche Haake-Beck Logos und Produktabbildungen findest du in unserer Mediendatenbank. > <a href="http://www.inbev-media.com/index.php?page=agecheck" target="_blank" class="text_link">Zur Mediendatenbank</a></div>
                                 <div class="faq_div" id="view_faq_8">Bei den Spielerbechern, in denen im Weserstadion unser Haake-Beck ausgeschenkt wird, handelt es sich um eine exklusive Aktion f&uuml;r das Stadion. Aus diesem Grund sind die Becher auch nur dort als Pfandbecher zu erhalten. Die Spielerbecher werden nicht von uns vertrieben. Bitte habe auch Verst&auml;ndnis daf&uuml;r, dass wir dir keine Becher zuschicken k&ouml;nnen. </div>
                                 <div class="faq_div" id="view_faq_9">> <a href="/kontaktformular/">zum Kontaktformular</a></div>
                               
                            
           <script type="text/javascript">
                function show_kontakt(id)
                {
                  if (id=='9')
                  {
                    location='/kontaktformular/';
                  }
                  $('#kontakt_antwort').html('');
                  if (id=='')
                  {
                    $('#kontakt_antwort').html('Hier finden Sie die Antwort.');
                  }
                  else
                  {
                    $('#kontakt_antwort').html($('#view_faq_'+id).html());
                  }
                }
              </script>
                                        
</div>
        
     
      </div>
      
    
      </div>
    
      

      
  
  
      
     
    

    
  
     
      
     
      <div class="clear"></div>
      
    <?php require_once("../include/footer.php"); ?>
      
      	
    
  </div>
  <div class="grid-m4"></div>
  <div class="grid-c4"> <?php $product = 'Pils'; require_once("../include/sidebar.php"); ?>
	</div>

<?php require_once("../include/js.php"); ?>

</body>
</html>
