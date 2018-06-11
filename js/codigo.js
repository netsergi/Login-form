var app = angular.module('login', []);

app.controller('validarForm', function ($scope, $http) {
	$scope.datosForm = {};
	$scope.enviar = function () {
		 $http.post('login.php',{"usuario": $scope.datosForm.usuario,"password": $scope.datosForm.password})
        	.success(function(data) {
          		$scope.error = JSON.parse(data);
          		console.log($scope.error.msg);
        	});        
	};
});

$(document).ready(function(){

	function centrar_Login()
	{
		var loginTop = ($(window).height() / 2) - ($(".login").height() /2);
		var loginLeft = ($(window).width() / 2) - ($(".login").width() /2);
		$(".login").css({'top': loginTop +'px','left' : loginLeft + 'px'}) ;
		$(".login").show();
	}
	centrar_Login();


});