<?php /*?><?php
$fb=1;
if (array_key_exists('fb', $_SESSION))
{
	if ($_SESSION['fb'] == '1')
	{
		$facebook_activate = '1';
	}
}
elseif ($_SESSION['fb'] == '0' || $_SESSION['fb'] == '')
	{
		$facebook_activate = '0';
	}
$twitter=1;
if (array_key_exists('twitter', $_SESSION))
{
	if ($_SESSION['twitter'] == 1)
	{
		$twitter_activate = '1';
	}
}
elseif ($_SESSION['twitter'] == '0' || $_SESSION['twitter'] == '')
	{
		$twitter_activate = '0';	
	}
	
$google=1;
if (array_key_exists('google', $_SESSION))
{
	if ($_SESSION['google'] == 1)
	{
		$google_activate = '1';
	}
}
elseif ($_SESSION['google'] == '0' || $_SESSION['google'] == '')
	{
		$google_activate = '0';	
	}

$linkin=1;
if (array_key_exists('linkin', $_SESSION))
{
	if ($_SESSION['linkin'] == 1)
	{
		$linkin=0;
	}
}


?>

    	
        <div class="socialarea">
        	<?php if($desktop == '1') { 
			        require_once("socialicons.php");
			        }

			?><small style="color:white; font-family: Arial; font-size: 14px; margin-left: 10px;"><b>Jetzt teilen!</b></small>
		</div>
        
        
<?php */?>