
$(function () {
	var currentPage = $('.current-page').attr('data-value');

	if(currentPage == "question"){		
		var questionCount = $('.current-page').attr('data-count');
		if(parseInt(questionCount) > 0){
			$(window).bind('beforeunload', function(e) { 
			    return "Unloading this page may lose data. What do you want to do..."
			    e.preventDefault();
			});
		}
	}

	function Timer(duration, display) 
	{
	    var timer = duration, hours, minutes, seconds;
	    setInterval(function () {
	        hours = parseInt((timer /3600)%24, 10)
	        minutes = parseInt((timer / 60)%60, 10)
	        seconds = parseInt(timer % 60, 10);

			hours = hours < 10 ? "0" + hours : hours;
	        minutes = minutes < 10 ? "0" + minutes : minutes;
	        seconds = seconds < 10 ? "0" + seconds : seconds;

	        display.text(hours +":"+minutes + ":" + seconds);

			--timer;

			if(timer == 0){
				alert('Time Up');
				$('.form-horizontal').submit();
				// return false;
			}
	    }, 1000);
	}

	var sec = $('.time-seconds').attr('data-value');
	var twentyFourHours = parseInt(sec);	
    var display = $('#remainingTime');
    Timer(twentyFourHours, display);
});