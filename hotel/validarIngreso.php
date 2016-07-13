
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			include 'Conexion.php';
			if(isset($_POST['Boton'])){
				$rut = $_POST['rut'];
				$contrasena = $_POST['contrasena'];
				$log = mysql_query("SELECT * FROM usuario WHERE RUT='$rut' AND CONTRASENA='$contrasena'");
				if (mysql_num_rows($log)>0) {
					$row = mysql_fetch_array($log);
					$_SESSION["rut"] = $row['RUT'];  //revisar esta linea...
					echo'<script> window.location="reserva.html"; </script>';
				  	echo 'Iniciando sesión para '.$_SESSION['RUT'].' <p>'; //despues de $_SESSION va ['usuario']
					echo '<script> window.location="panel.php"; </script>';
					
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="login.html"; </script>';
				}
			}
		?>	
</body>
</html>