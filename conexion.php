<?php
error_reporting(0); 
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "proyecto";

	$conn = mysqli_connect($servername,$username,$password,$dbname);

	if($conn)
	{
		//echo "Conexion exitosa";
	}
	else  
	{
		echo "Conexion fallida".mysqli_connect_error();
	}
?>