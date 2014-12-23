<?php session_start();?>
<!DOCTYPE html PUBLIC >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ejemplo de subida y redimensionamiento de im&aacute;genes usando SimpleImage</title>
<link rel="stylesheet" type="text/css" href="estilo.css">

<script> 
function cerar(){ 
    javascript:window.opener.document.location.reload();self.close()}
</script> 

</head>
<body>
<?php
//require("conexion_stark.php");
mysql_connect("localhost", "root", "") or die(mysql_error()) ;
mysql_select_db("driveservice") or die(mysql_error()) ;



include("SimpleImage.class.php"); //incluimos la clase
$var_usar_thumb = 1; //variable que comprueba si tendr� efecto o no el redimensionamiento (1 para s�, 0 para no)
$var_thumb_ancho = 200; //variable que recibe el ancho que va a tener la imagen
$var_thumb_alto = 200; //variable que recibe el alto que va a tener la imagen
if ($_FILES["file_img"]["error"] > 0){ //Si hay error en la imagen
	echo "Hay alg&uacute;n error con la imagen, para regresar haga <a href=\"form_funcion.html\">Click aqu&iacute;.</a>"; //mostramos un mensaje de error
}
else{ //sino
	$var_name_img = $_FILES["file_img"]["name"]; //repecionamos la imagen, y tomamos su nombre
	//$file = $_FILES['file_img']['name'];
	//$hoy=getdate();
	//$var_name_img=$hoy['yday'].$hoy['mon'].$hoy['mday'].$hoy['hours'].$hoy['minutes'].$hoy['seconds'].".jpg";
	//$dirfinal = "profiles/".$file;
	$var_img_dir = "profiles/"; //obtenemos el directorio actual con el cual se est� trabajando
	if (move_uploaded_file($_FILES["file_img"]["tmp_name"], $var_img_dir.$var_name_img)){ //si la imagen es subida al directorio del servidor
		$subida = true; //admitimos que la subida fue correcta
	}
	if ($subida === true){ //si la subida fue correcta
		$obj_simpleimage = new SimpleImage(); //creamos un objeto de la clase SimpleImage
		$obj_simpleimage->load($var_img_dir.$var_name_img); //leemos la imagen 
		if ( ($_FILES["file_img"]["type"]) != 'image/gif' && $var_usar_thumb == 1){//Si la imagen no es de tipo gif, y marcamos en el formulario como thumbnail
			$hoy=getdate();
			$var_nuevo_archivo =$hoy['yday'].$hoy['mon'].$hoy['mday'].$hoy['hours'].$hoy['minutes'].$hoy['seconds'].".jpg";
			//$var_nuevo_archivo = time().rand().".jpg"; //asignamos un nombre aleatorio al nuevo archivo, para evitar sobreescritura
			$obj_simpleimage->resize($var_thumb_ancho,$var_thumb_alto); //redimensionamos la imagen, con los valores de ancho y alto que hemos especificado
		}
		//else{ //sino
		//	$var_nuevo_archivo = time().rand().$var_name_img; //se agregar� al nombre original de la imagen una serie de n�meros aleatorios
		//}
		$var_nuevo_archivo = strtolower(str_replace(' ', '_', $var_nuevo_archivo)); //reemplazamos los espacios en blanco con sub-guiones, para hacer m�s compatible el nombre del archivo
		$obj_simpleimage->save($var_img_dir.$var_nuevo_archivo); //guardamos los cambios efectuados en la imagen
		unlink($var_img_dir . $var_name_img); //eliminamos del temporal la imagen que estabamos subiendo
//-----------------------------------------------------------------------------------------------------------------update en BD

		mysql_query("update usuarios set profile='$var_img_dir$var_nuevo_archivo' where id_usuario=$_SESSION[id_usuario]");
		
	}
}
?>
<script>cerar();</script>


</body>
</html>