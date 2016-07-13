<?php
session_start();
include 'Conexion.php';

if(isset($_SESSION['RUT'])) {?> <!-- if(isset($_SESSION['usuario'])) -->
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
</head>
<body>
<div>
  <article>
    <p> 
       Este es el Sitio funcionando, estamos dentro de la sesion.
    </p>
  </article>
  <a href="logout.php"><button>Salir</button></a>
</div>
</body>
</html>
<?php
}else{
	echo '<script> window.location="login.html"; </script>';
}
?>