<?php
include ('conexion.php');

$consulta = "INSERT INTO registros(rut, nombre, apellido, email, contraseña) VALUES ('15342320k', 'Fabian', 'Ruiz', 'p.ruis@gmail.com', 'FR2016')";

$ejecutar = mysql_query($consulta,$conexion) or die ('Error al insertar datos');
echo "Se insertaron los datos conrrectamente"



?>