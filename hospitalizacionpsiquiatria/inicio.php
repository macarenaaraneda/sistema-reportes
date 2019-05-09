<?php
session_start();


include '../config.php';

/* Si se reconoce rut y contraseña de administrador ingresar*/
if(!isset($_SESSION['rut']) || empty($_SESSION['rut'])){
   header("location: login.php");
   exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Bienvenido Jefatura de hospitalización pisquiatría
</body>
</html>