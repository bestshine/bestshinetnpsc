
$(function () {

    $('input[type="checkbox"]').click(function(){
    	// var inputValue = $(this).attr("value");
        $(".offer-details-field").toggle();
    });

	$('.only_number').bind('keypress', function (e) {
		return !(e.which != 8 && e.which != 0 &&
			(e.which < 48 || e.which > 57) && e.which != 46);
	});

    $("#dt1").datepicker({
        dateFormat: "dd-m-yy",
        minDate: 0,
        onSelect: function (date) {
            var dt2 = $('#dt2');
            var startDate = $(this).datepicker('getDate');
            var minDate = $(this).datepicker('getDate');
            dt2.datepicker('setDate', minDate);
            startDate.setDate(startDate.getDate() + 30);
            //sets dt2 maxDate to the last day of 30 days window
            dt2.datepicker('option', 'maxDate', startDate);
            dt2.datepicker('option', 'minDate', minDate);
            $(this).datepicker('option', 'minDate', minDate);
        }
    });

    $('#dt2').datepicker({
        dateFormat: "dd-m-yy"
    });	
		    
});