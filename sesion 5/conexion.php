<?php

$conexion = mysql_connect("localhost", "root", "") or  die("no conectado </br>");
echo "Conexion exitosa </br>";

mysql_set_charset('utf8');

mysql_select_db("registro_usuarios") or die("Base de Datos no encontrada </br>");
echo " Base de Datos encontrada </br>";


?>