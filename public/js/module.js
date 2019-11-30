

var app = angular.module('app', []);
app.config(function($interpolateProvider){
  $interpolateProvider.startSymbol('<%')
  $interpolateProvider.endSymbol('%>');
}); 
app.controller('MyCtrl', function ($scope, $window) {
    $scope.Materials = [];

    $scope.Add = function () {
        if(($scope.Name != "" && $scope.Name != undefined) && ($scope.Url != "" && $scope.Url != undefined)){
            //Add the new item to the Array.
            var customer = {};
            customer.Name = $scope.Name;
            customer.Url = $scope.Url;
            $scope.Materials.push(customer);

            //Clear the TextBoxes.
            $scope.Name = "";
            $scope.Url = "";
            updateAngularValue();
        }else{
            console.log('error');
        }
    };

    $scope.Remove = function (index) {
        //Find the record using Index from Array.
        var name = $scope.Materials[index].Name;
        if ($window.confirm("Do you want to delete: " + name)) {
            //Remove the item from Array using Index.
            $scope.Materials.splice(index, 1);
        }
        updateAngularValue();
    };

    function updateAngularValue(){
        $('input[name="angular_value"]').val('');
        var myJSON = JSON.stringify($scope.Materials);
        $('input[name="angular_value"]').val(myJSON); 
    }

    $scope.submit = function(){       
        $('.form-inline').submit();                     
    };      
});

$(function () {

  tinymce.init({
    selector: '#mytextarea'
    // plugins: 'placeholder'
  });

  $('#submit-update-form').click(function(){
    console.log('ds');
    $('.update-form').submit();
  }); 
});    