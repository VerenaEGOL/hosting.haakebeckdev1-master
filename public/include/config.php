<?php 

session_start();

if (array_key_exists('fb', $_GET))
{
	if ($_GET['fb']=='1' || $_GET['fb']=='0')
	{
		$facebook_akt = urlencode($_GET['fb']);
		if(isset($facebook_akt))
		{
			$_SESSION['fb'] = $facebook_akt;
			$url=$_SERVER['REQUEST_URI'];
			$url=str_replace('fb=1', '', $url);
			$url=str_replace('fb=0', '', $url);
			if(substr($url, -1,1)=='?')
			{
				$url=substr($url, 0,-1);
			}
			header('LOCATION: '.$url);
			exit();			
		}		
	}
}
if (array_key_exists('twitter', $_GET))
{
	if ($_GET['twitter']=='1' || $_GET['twitter']=='0')
	{
		$twitter_akt = urlencode($_GET['twitter']);
		if(isset($twitter_akt))
		{
			$_SESSION['twitter'] = $twitter_akt;
			$url=$_SERVER['REQUEST_URI'];
			$url=str_replace('twitter=1', '', $url);
			$url=str_replace('twitter=0', '', $url);
			if(substr($url, -1,1)=='?')
			{
				$url=substr($url, 0,-1);
			}
			header('LOCATION: '.$url);
			exit();			
		}		
	}
}
if (array_key_exists('google', $_GET))
{
	if ($_GET['google']=='1' || $_GET['google']=='0')
	{
		$google_akt = urlencode($_GET['google']);
		if(isset($google_akt))
		{
			$_SESSION['google'] = $google_akt;
			$url=$_SERVER['REQUEST_URI'];
			$url=str_replace('google=1', '', $url);
			$url=str_replace('google=0', '', $url);
			if(substr($url, -1,1)=='?')
			{
				$url=substr($url, 0,-1);
			}
			header('LOCATION: '.$url);
			exit();			
		}		
	}
}
if (array_key_exists('linkin', $_GET))
{
	if ($_GET['linkin']=='1' || $_GET['linkin']=='0')
	{
		$linkin_akt = mysql_real_escape_string($_GET['linkin']);
		if(isset($linkin_akt))
		{
			$_SESSION['linkin'] = $linkin_akt;
			$url=$_SERVER['REQUEST_URI'];
			$url=str_replace('linkin=1', '', $url);
			$url=str_replace('linkin=0', '', $url);
			if(substr($url, -1,1)=='?')
			{
				$url=substr($url, 0,-1);
			}
			header('LOCATION: '.$url);
			exit();			
		}		
	}
}

function find_mobile_browser() {
    if(preg_match('/(iphone|ipad|ipod|alcatel|android|blackberry|benq|cell|elaine|htc|iemobile|j2me|java|midp|mini|mobi|motorola|nokia|palm|panasonic|philips|phone|sagem|sharp|smartphone|sony|symbian|t-mobile|up\.browser|up\.link|vodafone|wap|xda|zte)/i', $_SERVER['HTTP_USER_AGENT'])) {
        return true;
    } else {
        return false;
    }
}
function find_ipad() {
    if(preg_match('/(ipad)/i', $_SERVER['HTTP_USER_AGENT'])) {
        return true;
    } else {
        return false;
    }
}


$mobile_browser = find_mobile_browser(); 
if($mobile_browser) { 
    $desktop = '0'; /* Wenn mobile Browser gefunden*/ 
} else { 
    $desktop = '1'; /* Desktop */ 
}
$mobile_ipad = find_ipad();
if($mobile_ipad) {
	$ipad = '1'; /* iPad gefunden */
} else {
	$iPad = '0'; /* Kein iPad */
}

?>