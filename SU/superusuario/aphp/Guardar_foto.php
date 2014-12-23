<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alta</title>
</head>

<body>
<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start(); 
include ("../includes/conexion.php");

$foto=$_POST["foto"];
$cadena="insert into noticias (titulo,contenido,imagen) values('$foto')";

$exito=mysqli_query($con,$cadena);
if ($exito)
{echo "La noticia Fue publicada Correctamente ";
}
else{echo "Nose en que te equivocaste";  echo $cadena; }

?>
    <input type="button" value="PERFIL" onClick="location.href = 'foto_perfil.php' ">
</body>
</html>
