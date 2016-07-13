<?php
// Conectando, seleccionando la base de datos

    $link = mysql_connect('localhost', 'root', '')    
    or die('No se pudo conectar: ' . mysql_error());
   // echo 'Connected successfully';
   
    mysql_select_db('hotel') or die('No se pudo seleccionar la base de datos');
	
   echo"<link href='css/style.css' rel='stylesheet' type='text/css'  media='all' />"; //estilo al fondo y letras


$nombres="";
$apellidos="";
$direccion="";
$rut="";
$email="";
$ciudad="";
$fono="";
$contrasena="";
$opcion=$_POST['boton'];

    if(!empty($_POST['RUT']))
        $rut=$_POST['RUT'];
  else
       $rut="";
   
   if(!empty($_POST['NOMBRE']))
        $nombres=$_POST['NOMBRE'];
  else
       $nombres="";
   
    if(!empty($_POST['APELLIDO']))
        $apellidos=$_POST['APELLIDO'];
  else
       $apellidos="";
   
     if(!empty($_POST['EMAIL']))
        $email=$_POST['EMAIL'];
  else
       $email="";
   
   if(!empty($_POST['DIRECCION']))
        $direccion=$_POST['DIRECCION'];
  else
       $direccion="";
   
   if(!empty($_POST['CIUDAD']))
        $ciudad=$_POST['CIUDAD'];
	else
       $ciudad="";
   
   if(!empty($_POST['TELEFONO']))
        $fono=$_POST['TELEFONO'];
  else
       $fono="";
   
    if(!empty($_POST['CONTRASENA']))
        $contrasena=$_POST['CONTRASENA'];
  else
       $contrasena="";
   

	   	   
function Insertar($nombres,$apellidos,$direccion,$rut,$email,$ciudad,$fono,$contrasena)
{
    $query = "INSERT INTO USUARIO values ('".$rut."','".$nombres."','".$apellidos."','".$email."','".$direccion."','".$ciudad."','".$fono."','".$contrasena."')";
    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
    echo '<script> alert("Registro insertado correctamente.");</script>';
	echo '<script> window.location="registro.html"; </script>';
	
}

  if ($opcion=="Guardar")
       Insertar($nombres,$apellidos,$direccion,$rut,$email,$ciudad,$fono,$contrasena); 
   
  
   
    // Cerrar la conexión
    mysql_close($link);
?>