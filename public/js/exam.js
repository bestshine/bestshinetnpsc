
$(function () {

	$(document).ready(function(){
	    $('.datatable').DataTable();
	});

	// $("#sel1").change(function(event) {
	//     $.ajax({
	//     	method: "POST",
	//     	url: "/dashboard/master/exam/create/sub-modules/by-main-modules",
	//     	data: {
	//     		_token: $("input[name='_token']").val(),
	//     		main_id: event.target.value
	//     	},
	//     	success: function(result){
	//     		$("#sel2").empty();
	//     	    $.each(result, function( index, value ){
	//     	   		$("#sel2").append("<option value="+value.id+">"+value.name+"</option>");
	//     	    });
	// 	    }
	// 	});
	// });		

    $( "#datepicker" ).datepicker({
     	changeMonth: false,
      	changeYear: false,
		dateFormat: 'dd-mm-yy',
		minDate: 0,      
    });   

	$('#duration').durationPicker({
	    
	    // optional object with translations (English is used by default) 
	    translations: {
	        day: 'day',
	        hour: 'hour',
	        minute: 'minute',
	        second: 'second',
	        days: 'days',
	        hours: 'hours',
	        minutes: 'minutes',
	        seconds: 'seconds',
	    },
	 
	    // defines whether to show seconds or not 
	    showSeconds: false,
	 
	    // defines whether to show days or not 
	    showDays: false,
	 
	    // callback function that triggers every time duration is changed  
	    //   value - duration in seconds 
	    //   isInitializing - bool value 
	    onChanged: function (value, isInitializing) {
	        
	        // isInitializing will be `true` when the plugin is initialized for the 
	        // first time or when it's re-initialized by calling `setValue` method 
	        console.log(value, isInitializing);
	    }
	});	
});