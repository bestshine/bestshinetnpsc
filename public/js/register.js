
$(function () {

	$('#phone_no').bind('keypress', function (e) {
		if(this.value.length>= 10) 
		{
			return false;
		}
		return !(e.which != 8 && e.which != 0 &&
			(e.which < 48 || e.which > 57) && e.which != 46);
	});

	$("#medium_id_register").change(function(event) {
		
	    $.ajax({
	    	method: "POST",
	    	url: "/common/get-standards",
	    	data: {
	    		_token: $("input[name='_token']").val(),
	    		state_id: $("#state_id_register").val(),
	    		board_id: $("#board_id_register").val(),
	    		medium_id: $("#medium_id_register").val()
	    	},
	    	success: function(result){
	    		$('#standard_id_register').attr('disabled',false);
	    		$("#standard_id_register").empty();
	    	   	$("#standard_id_register").append("<option value=''>Select Standard</option>");
	    	    $.each(result, function( index, value ){
	    	   		$("#standard_id_register").append("<option value="+value.id+">"+value.name+"</option>");
	    	    });
		    }
		});
	});	
});