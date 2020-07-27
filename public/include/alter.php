<?PHP
session_start();

$tag=$_REQUEST['tag'];
$monat=$_REQUEST['monat'];
$jahr=$_REQUEST['jahr'];

$tag=intval($tag);
$monat=intval($monat);
$jahr=intval($jahr);

if (!is_numeric($tag) || !is_numeric($monat) || !is_numeric($jahr))
{
	echo 'FEHLER1';
	return '';
}

if (strlen($tag)==0 || strlen($tag)>2)
{
	echo 'FEHLER2';
	return '';
}
if (strlen($monat)==0 || strlen($monat)>2)
{
	echo 'FEHLER3';
	return '';
}
if (strlen($jahr)< 4 || strlen($jahr)>4)
{
	echo 'FEHLER4';
	return '';
}

$jetzt = mktime(0,0,0,date("m"),date("d"),date("Y"));
$geburt = mktime(0,0,0,$monat,$tag,$jahr);
$alter   = intval(($jetzt - $geburt) / (3600 * 24 * 365));
if ($alter < 18)
{
	echo 'FEHLER5';
	return '';
}

$_SESSION['alterok']=$alter;


echo 'ERLAUBT';
return '';
?>