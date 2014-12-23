<?php
	$server = "127.0.0.1";
	$user = "root";
	$pword = "";
	
	$conn = mysql_connect($server, $user, $pword) or die("Cannot connect.");
	$db = mysql_select_db("driveservice", $conn) or die("Cannot connect.");

?>


<!-- include ("../includes/conexion.php");-->