<?php
include('conexion.php');

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

//comprbamos si los datos estan en la BD
$consulta = "SELECT * FROM registros WHERE rut = '$usuario' AND contraseña = '$pass'";

$ejecutar = mysql_query($consulta, $conexion);
//si son V muestra la consulta
//mysql_num_rows nos devuelva las filas q coincide consulta
$resul = mysql_num_rows($ejecutar);

if ($resul > 0) {
	while ($resul = mysql_fetch_array($ejecutar)) {
		echo $resul['rut'].'-'.$resul['nombre'].'-'.$resul['apellido'].'-'.$resul['email'].'-'.$resul['contraseña'];
		
	}
}else{
	header("Location:formulario.php?error=si");
}

?>