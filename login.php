<?php
	$obtener_datos = file_get_contents("php://input");
	$array = json_decode($obtener_datos, TRUE);
	$conex = new PDO("mysql:host=localhost;dbname=pruebas;charset=utf8", "root", "");
	$query = $conex -> prepare("select usuario,password from usuarios where usuario = :usuario;");
	$query->bindParam(':usuario', $array['usuario'], PDO::PARAM_STR);
	$query->execute();
	$resultado = $query->fetch();
	if ($resultado == null) {
		$error = json_encode(array("campo" =>"usuario" , "msg" =>"usuario no registrado"));
		echo $error;
	}
	else if ($resultado['password'] != $array['password']) {
		$error = json_encode(array("campo" =>"password" , "msg" =>"Password incorrecto"));
		echo $error;
	}
	else {
		$error = null;
		echo $error;
		session_start();
		$_SESSION['tiempo'] = time();
		$_SESSION['usuario'] = $array['usuario'];
	}
	$conex = null;
?>