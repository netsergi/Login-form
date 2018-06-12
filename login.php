<?php
	//header("Content-Type: application/json; charset=UTF-8");
	$obtener_datos = file_get_contents("php://input");
	$array = json_decode($obtener_datos, TRUE);
	$conex = new PDO("mysql:host=localhost;dbname=intranet;charset=utf8", "root", "");
	$query = $conex -> prepare("select usuario,password from login where usuario = :usuario;");
	$query->bindParam(':usuario', $array['usuario'], PDO::PARAM_STR);
	$query->execute();
	$resultado = $query->fetch();
	if ($resultado == null) {
		$error = "usuario no registrado";
		echo $error;
	}
	else if ($resultado['password'] != $array['password']) {
		echo "password incorrecto";
	}
	$conex = null;
?>