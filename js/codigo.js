var app = angular.module('login', []);

app.controller('validarForm', function ($scope, $http) {
	$scope.datosForm = {};
	$scope.enviar = function () {
		 $http.post('login.php',{"usuario": $scope.datosForm.usuario,"password": $scope.datosForm.password})
        	.success(function(data) {
          		$scope.error = data;
          		var input = document.getElementsByTagName("input");
          		switch ($scope.error.campo)
          		{
          			case "usuario":
          				input[0].classList.add("error");
          			break;

          			case "password":
          				input[1].classList.add("error");
          			break;
          		}
                  		
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

	var campo = $("[data-tipo='campo']");
	campo.focus(function(){
		if (campo.hasClass("error"))
		{
			$(this).removeClass("error");
			$(this).val("");
			$("p.error_msg").hide();
			$(".login").css("height","340px");			
		}
	});

	$("#btnenviar").click(function(){
		$("p.error_msg").show();
		$(".login").css("height","380px");
	});
	

});