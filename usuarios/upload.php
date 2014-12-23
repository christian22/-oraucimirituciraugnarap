<?php
session_start();
date_default_timezone_set("America/Mazatlan");//se establece zona horaria para mexico
$allowed = array('png', 'jpg', 'pdf');//lista de los formatos permitidos
$vec = $_POST["val"];//id del vehiculo
$dir = 'reportes/';//directorio
$name = basename($_FILES["upl"]["name"]);//nombre del archivo
$file = $dir.$name;//ruta y nombre del archivo concatenado
$date = date("Y-n-d");//formato de fecha igualado al formato de mysql
$time = date("h:i:s");//formato de hora igualado al formato de mysql
$extension = pathinfo($file, PATHINFO_EXTENSION);//formato del archivo sin el '.'

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){//verifica que existe variable y que no contenga error

	if(!in_array(strtolower($extension), $allowed)){//compara la extension del archivo al subir con la lista del las formatos permitidos
		echo '{"status":"error"}';
		exit;
	}
	if(!file_exists($file))
	{
		if(move_uploaded_file($_FILES['upl']['tmp_name'], $file)){
			echo '{"status":"success"}';
			$conn = mysql_connect("localhost", "root", "") or die("Cannot connect.");
			$db = mysql_select_db("driveservice", $conn) or die("Cannot connect.");
			mysql_query("INSERT INTO registro (id_vehiculo, nombre, tipo, fecha, hora, dir) 
						VALUES ('$vec', '$name', '$extension', '$date', '$time', '$file')");
			exit;
		}
	}
	else{
		echo '{"status":"error"}';
		exit;
	}
}

echo '{"status":"error"}';
exit;


?> 
