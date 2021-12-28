<!-- incluir archivos requeridos.
	Obtener variables con los datos ingresados en login, la contraseña debe estar dentro de una función hash.
	Verificar que exista el registro en la base de datos.
		Si el registro existe entonces:
			Iniciar sesión.
			Crear variables de sesión a ocupar.
			Asignar los permisos según el cargo. 

		Si no existe el registro enviar una variable para mostra mensaje en pagina de login. 
<?php

require('conexion.php');

$usuario = $_POST['usuario'];

$pass = md5 ($_POST['pass']);


$consulta = "SELECT * FROM registro WHERE rut = '$usuario' AND contraseña = '$pass'";



$ejecutar = mysqli_query($conexion, $consulta);



$resul = mysqli_num_rows($conexion, $ejecutar);

if ($resul > 0) {
		session_start(); //creamos la sesion dependiendo si los datos exites en la BD

		$_SESSION['activo'] = true;
		$_SESSION['usuario'] = $usuario; //coresponde al rut ingresado en login

    //ingresa a la paginas dependiendo del rut
		if ($usuario == '180332403') {
			 echo "<script> location.replace('principalAdmin.php'); </script>"

		}else if ($usuario == '153204209') {
			echo "<script> location.replace('Location:principalBodega.php'); </script>"
	

}else{
       echo "<script> location.replace('Location:login.php?error=si'); </script>"     
	
};




?>




