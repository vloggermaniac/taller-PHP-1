
<!-- incluir archivos requeridos.
	Verificar la confirmación de la contraseña.
		Recuperar las variables con los datos ingresados en el formulario. 

		Validar que el rut ingresado no se encuantre en la base de datos.
			Si ya existe un registro vinculado al rut ingresado:
				Redirigir a login y entregar mensaje.

			Si no existe:
			Insertar datos en tabla correspondiente.
			Redirigir a login y mostrar mensaje.

	Si las contraseñas no existen redirigir a login y mostrar mensaje. -->  
<?php
include ('conexion.php');

if ($_POST['contrasena1'] == $_POST['contrasena2']) {

	$rut = $_POST['rut'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$contraseña = md5($_POST['contrasena2']);

	$consulta = "INSERT INTO registro (rut, nombre, apellido, email, contraseña) VALUES ('$rut', '$nombre', '$apellido', '$email', '$contraseña')";

	$ejecutar = mysql_query($consulta, $conexion) or die ("No se pudo crear el registro");

	header("Location: login.php?valida=si");
}else {
	header("Location:  login.php?erronea=si");
}


?>

