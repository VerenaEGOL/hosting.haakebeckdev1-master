
<div class="brandbar">
	<div class="grid-m1"></div>
	<div class="grid-c1"></div>
	<div class="grid-m2"></div>
	<div class="grid-full nomarginbottom">
	<div class="claim"><?php include("claim.php"); ?></div>
</div>
<div class="grid-m4"></div>
	<div class="grid-c4"></div>  
</div>
<script src="/js/audioplayer.min.js"></script>
<script src="/js/jquery.swipebox.min.js"></script>
<script src="/components/moment/min/moment.min.js"></script>
<script src="/js/agecheck.js"></script>
<script type="text/javascript">
;( function( $ ) {
	$( '.swipebox' ).swipebox();
} )( jQuery );
</script>
<script>
(function($){
$(document).ready(function(){

$(function(){ $('#equalize').equalHeights(); });

$('#cssmenu li.active').addClass('open').children('ul').show();

$('#cssmenu li.has-sub>a').on('click', function(){
	$(this).removeAttr('href');
	var element = $(this).parent('li');
	if (element.hasClass('open')) {
		element.removeClass('open');
		element.find('li').removeClass('open');
		element.find('ul').slideUp(200);
	}
	else {
		element.addClass('open');
		element.children('ul').slideDown(200);
		element.siblings('li').children('ul').slideUp(200);
		element.siblings('li').removeClass('open');
		element.siblings('li').find('li').removeClass('open');
		element.siblings('li').find('ul').slideUp(200);
	}
});
/* Start - Lässt aktiven Punkt bei Seitenwechsel offen */

activeElement = $('.active').first().parent('li');
if ( !activeElement.children().hasClass("noopen") ) {
	activeElement.addClass('open');
	activeElement.children('ul').slideDown(200);
	activeElement.siblings('li').children('ul').slideUp(200);
	activeElement.siblings('li').removeClass('open');
	activeElement.siblings('li').find('li').removeClass('open');
	activeElement.siblings('li').find('ul').slideUp(200);
}
/* Ende - Lässt aktiven Punkt bei Seitenwechsel offen */
});
})(jQuery);

</script>
<script type="text/javascript">
$(document).ready(function(){
	$(function(){ 
		//setTimeout(, 2000); 
		setTimeout(function(){ $('#equalize').equalHeights(); }, 100);
	});
});
</script>
