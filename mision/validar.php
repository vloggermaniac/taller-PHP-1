
			<?php
			include ('conexion.php');
			?>

			<?php

			$usuario = $_POST['usuario'];
			$pass = md5($_POST['pass']);


			$consulta = "SELECT * FROM PERSONAL WHERE RUT = '$usuario' AND CONTRASEÑA ='$pass' ";
			$ejecutar = $mysqli -> query($consulta)or die('Datos no encontrados.');
			$resul = mysqli_num_rows($ejecutar);

			$consulta = "SELECT CARGO FROM PERSONAL WHERE RUT = '$usuario' ";
			$ejecutar = $mysqli -> query($consulta);

			$fila = $ejecutar->fetch_row();
			$cargo = $fila[0];

			if ($resul>0) {
				session_start();
				$_SESSION['activo'] = true;
				$_SESSION['usuario'] = $usuario;


				if ($cargo=='Bodega') {
					header("Location:principalBodega.php");
				}else if ($cargo=='Admin') {
					header("Location:principalAdmin.php");
				}

			}else {
				header("Location:login.php?error=si");
			}

			?>
