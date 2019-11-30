

// $(document).ready(function() {
//   $(".container").animsition({
//     inClass: 'fade-in',
//     outClass: 'fade-out',
//     inDuration: 1500,
//     outDuration: 800,
//     linkElement: '.animsition-link',
//     // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
//     loading: true,
//     loadingParentElement: 'body', //animsition wrapper element
//     loadingClass: 'animsition-loading',
//     loadingInner: '', // e.g '<img src="loading.svg" />'
//     timeout: false,
//     timeoutCountdown: 5000,
//     onLoadEvent: true,
//     browser: [ 'animation-duration', '-webkit-animation-duration'],
//     // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
//     // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
//     overlay : false,
//     overlayClass : 'animsition-overlay-slide',
//     overlayParentElement : 'body',
//     transition: function(url){ window.location.href = url; }
//   });
// });

var appcommon = angular.module('appcommon', []);
appcommon.controller('commonCtrl', function ($scope, $http) {
  $scope.feedBackFormData = {};
  $scope.reportErrorFormData = {};
  $scope.sendFeedback = function(event){       
    event.preventDefault();
    var req = {
      method: 'POST',
      url: '/send/feedback',
      data: $scope.feedBackFormData
    }

    $http(req).then(function(){
      $("#myFeedbackModal").css("display","none");
      $(".modal-backdrop.in").css("display","none");
      swal(
        'Good job!',
        'Feedback has been posted successfully',
        'success'
      );
      $scope.feedBackFormData = '';
    }, function(){
      console.log('error');
    });                         
  }; 

  // send report error
  $scope.sendReportError = function(event){       
    event.preventDefault();
    var req = {
         method: 'POST',
         url: '/send/report-error',
         data: $scope.reportErrorFormData
    }

    $http(req).then(function(){
      $("#myReportErrorModal").css("display","none");
      $(".modal-backdrop.in").css("display","none");
      swal(
        'Good job!',
        'Report has been posted successfully',
        'success'
      );
    }, function(){
      console.log('error');
    });                         
  };           
});

$(function () {
  $(document).on('click', '.notify-click', function(e) {
    var notifiCount = $('.numberCircle').html();
    if(notifiCount != 0){
      $.ajax({
        url: "/dashboard/update/notify-count", 
        data: {
          key:"update"
        }, 
        success: function(result){
          $('.numberCircle').html(0);
        }
      });
    }    
  });

  // get standards by state,board,medium
  $("#medium_id_common").change(function(event) {
      $.ajax({
        method: "POST",
        url: "/common/get-standards",
        data: {
          _token: $("input[name='_token']").val(),
          state_id: $("#state_id_common").val(),
          board_id: $("#board_id_common").val(),
          medium_id: $("#medium_id_common").val()
        },
        success: function(result){
          $('#standard_id_common').attr('disabled',false);
          $("#standard_id_common").empty();
          $("#standard_id_common").append("<option value=''>Select Standard</option>");
          $.each(result, function( index, value ){
            $("#standard_id_common").append("<option value="+value.id+">"+value.name+"</option>");
          });
        }
    });
  });

  // get subject based on standards
  $("#standard_id_common").change(function(event) {
      $.ajax({
        method: "POST",
        url: "/dashboard/master/exam/create/sub-modules/by-main-modules",
        data: {
          _token: $("input[name='_token']").val(),
          main_id: event.target.value
        },
        success: function(result){
          $('#subject_id_common').attr('disabled',false);
          $("#subject_id_common").empty();
          $("#subject_id_common").append("<option value=''>Select Subject</option>");
          $.each(result, function( index, value ){
            $("#subject_id_common").append("<option value="+value.id+">"+value.name+"</option>");
          });
        }
    });
  });     
}); 