function sanityCheck(e) {
	var max = e.attr('max');
	var value = e.val();

	if (value > max == false) {
		return;
	}

	e.val(max);
}

function pulsate() {
	$(".pulsate").
	animate({
		opacity: 0.2
	}, 1000, 'linear').
	animate({
		opacity: 1
	}, 1000, 'linear');
}

function validateAge() {
	var day = $('#check_age_tag').val();
	var month = $('#check_age_monat').val();
	var year = $('#check_age_jahr').val();
	var today = moment();

	if (! day || ! month || ! year) {
		return;
	}

	var age = moment(year + "-" + month + "-" + day);
	
	if (today.isAfter(age.add(18, 'y'))) {
		return true;
	}

	return false;
}	

$(document).ready(function() {
	$('.age-input').focus().val('');
	$('.age-input').on('keyup', function() {
		var length = $(this).val().length;
		var maxLength = $(this).attr('maxlength');
		var next = $(this).next();

		if (length != maxLength) {
			return;
		}

		sanityCheck($(this))
		next.focus();
	});

	$('#age-form').submit(function(e) {
		e.preventDefault();

		if (validateAge()) {
			$.get('/js/alter.php', function() {
				window.location.reload();
			});
		}
	});
});