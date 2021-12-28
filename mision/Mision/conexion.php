<!-- Conexión a la base de datos,
codificación de caracteres,
seleccion de base de datos. -->
<?php

$conexion = mysql_connect("localhost", "root", "") or  die("no conectado </br>");

mysql_set_charset('utf8');

mysql_select_db("registro_usuarios") or die("Base de Datos no encontrada </br>");

?>