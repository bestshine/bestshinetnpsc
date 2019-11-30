
$(function () {

	$( ".btn.yellow-crusta" ).click(function() {
		var id = $(this).attr('data-value');
		$('input[name="subscribe_id"]').val(id);
		$(".subscribe-plan").submit();
	});
});