<footer>
    <ul>
    <?php 
	if($desktop=='0' AND $iPad == '0') { ?>
    
    <li><a href="/impressum/index.php" class="footernav <?php if($pagetitle=='Impressum') { echo 'footeractiv'; } ?>">Impressum</a></li>
    <li><a href="/datenschutz/index.php" class="footernav <?php if($pagetitle=='Datenschutz') { echo 'foooteractiv'; } ?>">Datenschutz</a></li>
    <div class="socialarea">
        <?php
            
                require_once("socialicons.php");
            
        ?>
    </div>
    
    
    <?php } else { ?>
	<li><a href="/kontakt/index.php" class="footernav <?php if($pagetitle=='FAQ') { echo 'footeractiv'; } ?>">FAQ</a></li>
    <li><a href="/impressum/index.php" class="footernav <?php if($pagetitle=='Impressum') { echo 'footeractiv'; } ?>">Impressum</a></li>
    <li><a href="http://www.ab-inbev.de/unternehmen/produktinformationen-lmiv.html" class="footernav" target="_blank">Verbraucherinformationen</a></li>
    <li><a href="/nutzung/index.php" class="footernav <?php if($pagetitle=='Nutzung') { echo 'footeractiv'; } ?>">Nutzung</a></li>
    <li><a href="/datenschutz/index.php" class="footernav <?php if($pagetitle=='Datenschutz') { echo 'footeractiv'; } ?>">Datenschutz</a></li>
    <li class="linefooter"></li>
    <?php } ?>
    </ul>
    <div class="footer_line"></div>
    
    <div class="claim_footer"><?php include("claim.php"); ?></div>
    </footer>
    
    
