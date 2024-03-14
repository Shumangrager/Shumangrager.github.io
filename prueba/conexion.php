<?php
	$host='localhost';
	$user='root';
	$password='Checker19,.s';
	$db='prueba';
	
	$conection=@mysqli_connect($host,$user,$password,$db);
	if(!$conection){
		echo "Error en la conexión";
	}
	else{
		echo "Conexión exitosa";
	}
?>