<?php
$product = !$product ? '' : $product;
switch ($product) {
	case 'Pils':
		echo '<a class="active" href="/produkte/pils/index.php"><img class="prod_sidebar" alt="#" title="" src="/images/produkte/HB-Pils-Flasche-033.png"></a>';
		break;

	case '12':
		echo '<a href="#"><img class="prod_sidebar" alt="#" title="" src="/images/produkte/HB-12-Flasche.png"></a>';
		break;

	case 'Alster':
		echo '<a href="#"><img class="prod_sidebar" alt="#" title="" src="/images/produkte/HB-Alster-Flasche.png"></a>';
		break;

	case 'NaturAlster':
		echo '<a href="#"><img class="prod_sidebar" alt="#" title="" src="/images/produkte/HB-Natur-Alster-Flasche.png"></a>';
		break;

	case 'Export':
		echo '<a href="#"><img class="prod_sidebar" alt="#" title="" src="/images/produkte/HB-Export-Flasche.png"></a>';
		break;

	/*
	case 'Maibock':
		echo '<a href="#"><img class="prod_sidebar" alt="#" title="" src="/images/produkte/HB-Maibock-Flasche.png"></a>';
		break;
    */
	case 'Kraeusen':
		echo '<a href="#"><img class="prod_sidebar" alt="#" title="" src="/images/produkte/HB-Kraeusen-Flasche.png"></a>';
		break;
	
	default:
		echo '<a href="#"><img class="prod_sidebar" alt="#" title="" src="/images/produkte/HB-Pils-Flasche-033.png"></a>';
		break;
}
?>
</div>
<br style="clear:both" />