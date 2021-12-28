<?php
include('conexion.php');

$usuario = $_POST['usuario'];
$pass = md5($_POST['pass']);

$consulta = "SELECT * FROM registros WHERE rut = '$usuario' AND contraseña = '$pass'";

$ejecutar = mysql_query($consulta, $conexion);

$resul = mysql_num_rows($ejecutar);

if ($resul > 0) {
		session_start(); //creamos la sesion dependiendo si los datos exites en la BD

		$_SESSION['activo'] = true;
		$_SESSION['usuario'] = $usuario; //coresponde al rut ingresado en login

    //ingresa a la paginas dependiendo del rut
		if ($usuario == '153412977') {
			header("Location:eliminar.php");

		}else if ($usuario == '132497123') {
			header("Location:modificar.php");

		}else if ($usuario == '91273320') {
			header("Location:mostrar.php");
		}

}else{
	header("Location:formulario.php?error=si");
}

?>