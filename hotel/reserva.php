<?php
// Conectando, seleccionando la base de datos

    $link = mysql_connect('localhost', 'root', '')    
    or die('No se pudo conectar: ' . mysql_error());
   // echo 'Connected successfully';
   
    mysql_select_db('hotel') or die('No se pudo seleccionar la base de datos');
	
   echo"<link href='css/style.css' rel='stylesheet' type='text/css'  media='all' />"; //estilo al fondo y letras
$id="";  
$rut="";
$fingreso="";
$fsalida="";

$opcion=$_POST['boton'];
   
    if(!empty($_POST['IDRESERVA']))
        $id=$_POST['IDRESERVA'];
  else
       $id="";
   
   if(!empty($_POST['RUT']))
        $rut=$_POST['RUT'];
  else
       $rut="";
   
   if(!empty($_POST['FECHAENTRADA']))
        $fingreso=$_POST['FECHAENTRADA'];
  else
       $fingreso="";
   
   if(!empty($_POST['FECHASALIDA']))
        $fsalida=$_POST['FECHASALIDA'];
  else
       $fsalida="";
   
    	   	   
function Insertar($id,$rut,$fingreso,$fsalida)
{
    $query = "INSERT INTO RESERVA values (".$id.",'".$rut."','".$fingreso."','".$fsalida."')";
    $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
    echo '<script> alert("Registro insertado correctamente.");</script>';
	echo '<script> window.location="index.html"; </script>';
	
}
function Verificar($fingreso,$fsalida)
{
    
	// Imprimir los resultados en HTML
    // Realizar una consulta MySQL
   // $query = "SELECT * FROM RESERVA WHERE FECHAENTRADA LIKE '".$fingreso."' and FECHASALIDA LIKE '".$fsalida."'";
	$log = mysql_query("SELECT * FROM RESERVA WHERE FECHAENTRADA='$fingreso' AND FECHASALIDA='$fsalida'");
	if (mysql_num_rows($log)>0) {
		$row = mysql_fetch_array($log);
		 echo '<script> alert("fechas ya existen.");</script>';
	}
	else
	{
		 echo '<script> alert("puede reservar.");</script>';
	}
    //$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	
   
	
}

  if ($opcion=="Guardar")
       Insertar($id,$rut,$fingreso,$fsalida); 
   
   if ($opcion=="Verificar")
       Verificar($fingreso,$fsalida); 
   
  
   
    // Cerrar la conexión
    mysql_close($link);
?>