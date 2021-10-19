
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "clientes_nuevos";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);

if($conn)
{ echo "connection sucessfull"; }
else{
	die("No hay conexion: ".mysqli_connect_error());	
	}

?>

