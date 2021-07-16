<?php
	$server = "localhost";
	$username = "McGilford";
	$password = "chucho61997";
	$db = "Entregas";
	$con = @mysqli_connect($server, $username, $password)or die("no se ha podido establecer la conexion");
	$sdb = @mysqli_select_db($con, $db);
?>