<?php
  require_once("../../include/app.php"); 
  $id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

?>
<!DOCTYPE html>
<html lang="de">
<head>

<?php $pagetitle='Mein Werder'; require_once("../../include/head.php"); ?>
<meta name="description" content="#">
<script>
    $(document).ready(function() {
      $("#slider").owlCarousel({

      navigation : false,
      slideSpeed : 600,
      paginationSpeed : 400,
      singleItem : false,
    pagination: true,
    autoHeight: false,
    autoPlay: false,
    items:3,
    itemsDesktopSmall : [1190,3],
    itemsTablet: [1024,2],
    itemsTablet: [768,1],

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


      <?php include("../../include/gen/touch_info_full-green.php"); ?>
          
          <div class="teaserinner">
          <h1 class="margin30">HAAKE-BECK<br>
Mein SV Werder Bremen!</h1>
          <div class="trennline linefirst"></div>
          <div class="kader-visual">
            <div id="slider" class="owl-carousel">

              <?php 

            $spieler_sel = $pdo->query("SELECT * FROM  `werder_kader_2019`"); 
            while($spieler = $spieler_sel->fetch()) {


                ?>


                <div class="produebersicht">
                <a href="#"  style="text-decoration:none;" class="spielerbild" id="<?= $spieler['id'] ?>" ><img src="/aktionen/mein-sv-werder-bremen/spieler2019/<?= $spieler['bild']?>" class="produktuebersicht" title="" alt="<?= $spieler['vorname'].' '.$spieler['nachname']?>" />
                <h5 class="spieler"><?= $spieler['vorname'].' '.$spieler['nachname']?></h5></a>
              </div>
              <?php } ?>
            </div>
            </div>
            <div class="trennline linelast"></div>
            <p class="center"><br><br>Bitte wähle einen Spieler aus um mehr über ihn zu erfahren.</p>      
            
          </div>

    
      </div>


      <div class="fullteaser backgroundfull">
      
        
      
      <div class="teaser_HAAKEBECK"><img src="/images/design/HAAKEBECK.png" title="" alt="HAAKEBECK" /></div>
      <div class="teaserinner">
      

      <div>
        <h1 class="margin30">Steckbrief</h1>

        <div id="spieler">
          <div class="trennline linefirst"></div>
          <?php 
            
            $spieler_sel = $pdo->prepare("SELECT * FROM  `werder_kader_2019` WHERE id = ?");
            $spieler_sel->bindValue(1, $id);
            $spieler_sel->execute();
            $spieler = $spieler_sel->fetch(PDO::FETCH_ASSOC);
          ?>
          <div class="floatdivs"> 
                          <img id="bild" src="/aktionen/mein-sv-werder-bremen/spieler2019/<?= $spieler['bild'] ?>" class="visual" title="" alt="<?= $spieler['vorname'] ?> <?= $spieler['nachname'] ?>">
                      </div>
                      <div class="floatdivs"> 

                        <table style="font-size:13px;">
                          <tr>
                            <td colspan="2"><h1 style="text-align:left;" id="spielername"><?= $spieler['vorname'] ?> <?= $spieler['nachname'] ?></h1></td>
                          </tr>
                          <tr>
                            <td width="50%">Position</td>
                            <td width="50%"><span id="position"><?= $spieler['position'] ?></span></td>
                          </tr>
                          <tr>
                            <td>Bei Werder seit<br>&nbsp;</td>
                            <td>
                              <span id="bei_werder">
                              <?php 
                              $seit = explode('-', $spieler['bei_werder_seit']);
                              echo $seit[2].'.'.$seit[1].'.'.$seit[0];
                              ?>
                              </span>
                              <br>&nbsp;
                            </td>
                          </tr>

                            <tr id="rueckennr_tr" <?php if ($spieler['rueckennummer'] == '0') echo 'style="display:none;"'; ?>>
                              <td>Rückennummer</td>
                              <td>
                                <span id="ruecken">
                                <?= $spieler['rueckennummer']; ?>
                                </span>
                                <br>&nbsp;
                              </td>
                            </tr>
                          
                          <tr>
                            <td>Geburtsdatum</td>
                            <td>
                              <span id="geburtstag">
                              <?php 
                              $geburtstag = explode('-', $spieler['geburtstag']);
                              echo $geburtstag[2].'.'.$geburtstag[1].'.'.$geburtstag[0];
                              ?>
                              </span>
                            </td>
                          </tr>
                          
                          <tr id="groesse_tr" <?php if ($spieler['groesse'] == 0) echo 'style="display:none;"'; ?>>
                            <td>Größe</td>
                            <td><span id="groesse"><?= $spieler['groesse'] ?></span> cm</td>
                          </tr>
                          <tr id="gewicht_tr" <?php if ($spieler['gewicht'] == 0) echo 'style="display:none;"'; ?>>
                            <td>Gewicht</td>
                            <td><span id="gewicht"><?= $spieler['gewicht'] ?></span> kg</td>
                          </tr>
                          <tr id="nation" <?php if ($spieler['nation'] == 0) echo 'style="display:none;"'; ?>>
                            <td>Nationalität</td>
                            <td><span id="nation"><?= $spieler['nation'] ?></span></td>
                          </tr>
                          <tr>
                            <td>Geburtsort</td>
                            <td><span id="geburtsort"><?= $spieler['geburtsort'] ?></span></td>
                          </tr>
                          <tr id="familienstand_tr" <?php if ($spieler['familienstand']) echo 'style="display:none;"'; ?>>
                            <td>Familienstand</td>
                            <td><span id="familienstand"><?= $spieler['familienstand'] ?></span></td>
                          </tr>
                          <tr id="kinder_tr" <?php if (!$spieler['kinder']) echo 'style="display:none;"'; ?>>
                            <td>Kinder</td>
                            <td><span id="kinder"><?= $spieler['kinder'] ?></span></td>
                          </tr>
                          <tr id="erfolge_tr1" <?php if ($spieler['erfolge'] == '') echo 'style="display:none;"'; ?>>
                            <td colspan="2"><b><br>Größte Erfolge</b></td>
                          </tr>
                          <tr id="erfolge_tr2" <?php if ($spieler['erfolge'] == '') echo 'style="display:none;"'; ?>>
                            <td colspan="2"><span id="erfolge"><?= $spieler['erfolge'] ?></span></td>
                          </tr>
                          
                          <tr id="vereine_tr1" <?php if ($spieler['vereine'] == '') echo 'style="display:none;"'; ?>>
                            <td colspan="2"><b><br>Bisherige Vereine</b></td>
                          </tr>
                          <tr id="vereine_tr2" <?php if ($spieler['vereine'] == '') echo 'style="display:none;"'; ?>>
                            <td colspan="2"><span id="vereine"><?= $spieler['vereine'] ?></span></td>
                          </tr>

                            <tr id="einsaetze_tr1" <?php if ($spieler['einsaetze'] == '') echo 'style="display:none;"'; ?>>
                            <td colspan="2"><b><br>Bisherige Einsätze</b></td>
                          </tr>
                          <tr id="einsaetze_tr2" <?php if ($spieler['einsaetze'] == '') echo 'style="display:none;"'; ?>>
                            <td colspan="2"><span id="einsaetze"><?= nl2br($spieler['einsaetze']) ?></span></td>
                          </tr>


                          <tr id="trainerlaufbahn_tr1" <?php if ($spieler['trainerlaufbahn'] == '') echo 'style="display:none;"'; ?>>
                            <td colspan="2"><b><br>Bisherige Trainerlaufbahn</b></td>
                          </tr>
                          <tr id="trainerlaufbahn_tr2" <?php if ($spieler['trainerlaufbahn'] == '') echo 'style="display:none;"'; ?>>
                            <td colspan="2"><span id="trainerlaufbahn"><?= $spieler['trainerlaufbahn'] ?></span></td>
                          </tr>

                          <tr id="trainererfolge_tr1" <?php if ($spieler['trainererfolge'] == '') echo 'style="display:none;"'; ?>>
                            <td colspan="2"><b><br>Bisherige Trainererfolge</b></td>
                          </tr>
                          <tr id="trainererfolge_tr2" <?php if ($spieler['trainererfolge'] == '') echo 'style="display:none;"'; ?>>
                            <td colspan="2"><span id="trainererfolge"><?= $spieler['trainererfolge'] ?></span></td>
                          </tr>

                          <tr id="spielerlaufbahn_tr1" <?php if ($spieler['spielerlaufbahn'] == '') echo 'style="display:none;"'; ?>>
                            <td colspan="2"><b><br>Bisherige Spielerlaufbahn</b></td>
                          </tr>
                          <tr id="spielerlaufbahn_tr2" <?php if ($spieler['spielerlaufbahn'] == '') echo 'style="display:none;"'; ?>>
                            <td colspan="2"><span id="spielerlaufbahn"><?= $spieler['spielerlaufbahn'] ?></span><br>&nbsp;</td>
                          </tr>
                        </table>
                      </div>
                      <div class="clear"></div>

          <div class="trennline linelast"></div>      
          <p class="center"><br>Mit freundlicher Unterstütung<br><br></p>
          <p class="center"><a class="regular" href="http://www.werder.de" target="_blank">www.werder.de</a></p> 
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
<script type="text/javascript">
    function nl2br (str, is_xhtml) {   
        var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';    
        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
    }

  $(window).ready( function() {
    $('.spielerbild').click(function() {
      $.get( "spielerdata.php", { id: $(this).attr('id') } )
        .done(function( data ) {
          $('#spielername').text(data.vorname + ' ' + data.nachname);
          $('#position').text(data.position);
          var bei_werder = data.bei_werder_seit.split('-');
          $('#bei_werder').text(bei_werder[2]+'.'+bei_werder[1]+'.'+bei_werder[0]);
          var geburtsdatum = data.geburtstag.split('-');
          $('#geburtstag').text(geburtsdatum[2]+'.'+geburtsdatum[1]+'.'+geburtsdatum[0]);
          
          if (data.rueckennummer == '0') {
            $('#rueckennr_tr').hide();
          } else {
            $('#rueckennr_tr').show();
            $('#ruecken').text(data.rueckennummer);
          }

          if (data.groesse != 0) {
            $('#groesse').text(data.groesse);
            $('#groesse_tr').show();
          } else {
            $('#groesse_tr').hide();
          }

          if (data.groesse != 0) {
            $('#gewicht').text(data.gewicht);
            $('#gewicht_tr').show();
          } else {
            $('#gewicht_tr').hide();
          }

          if (data.groesse != 0) {
            $('#nation').text(data.nation);
            $('#nation_tr').show();
          } else {
            $('#nation_tr').hide();
          }

          $('#geburtsort').text(data.geburtsort);
          $('#familienstand').text(data.familienstand);
          
          if (data.kinder == '') {
            $('#kinder_tr').hide();
          } else {
            $('#kinder_tr').show();
            $('#kinder').text(data.kinder);
          }

          if (data.familienstand == '') {
            $('#familienstand_tr').hide();
          } else {
            $('#familienstand_tr').show();
            $('#familienstand').text(data.familienstand);
          }

          if (data.erfolge == '') {
            $('#erfolge_tr1').hide();
            $('#erfolge_tr2').hide();
          } else {
            $('#erfolge_tr1').show();
            $('#erfolge_tr2').show();
            $('#erfolge').text(data.erfolge);
          }

          if (data.vereine == '') {
            $('#vereine_tr1').hide();
            $('#vereine_tr2').hide();
          } else {
            $('#vereine_tr1').show();
            $('#vereine_tr2').show();
            $('#vereine').text(data.vereine);
          }

          if (data.einsaetze == '') {
            $('#einsaetze_tr1').hide();
            $('#einsaetze_tr2').hide();
          } else {
            $('#einsaetze_tr1').show();
            $('#einsaetze_tr2').show();
            $('#einsaetze').html(nl2br(data.einsaetze));
          }

          if (data.trainerlaufbahn == '') {
            $('#trainerlaufbahn_tr1').hide();
            $('#trainerlaufbahn_tr2').hide();
          } else {
            $('#trainerlaufbahn_tr1').show();
            $('#trainerlaufbahn_tr2').show();
            $('#trainerlaufbahn').html(data.trainerlaufbahn);
          }

          if (data.trainererfolge == '') {
            $('#trainererfolge_tr1').hide();
            $('#trainererfolge_tr2').hide();
          } else {
            $('#trainererfolge_tr1').show();
            $('#trainererfolge_tr2').show();
            $('#trainererfolge').text(data.trainererfolge);
          }

          if (data.spielerlaufbahn == '') {
            $('#spielerlaufbahn_tr1').hide();
            $('#spielerlaufbahn_tr2').hide();
          } else {
            $('#spielerlaufbahn_tr1').show();
            $('#spielerlaufbahn_tr2').show();
            $('#spielerlaufbahn').html(data.spielerlaufbahn);
          }

          $('#bild').attr('src', '/aktionen/mein-sv-werder-bremen/spieler2019/'+data.bild);

      });
    });
  });

</script>

</body>
</html>
