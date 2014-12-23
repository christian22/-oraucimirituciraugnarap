<?php session_start(); ?>
<?php 
require("conexion_stark.php");

//echo"$_SESSION[id_usuario]";

$motor=$_POST['serieM'];
$clave=$_POST['claveV'];
$km=$_POST['KiloM'];
$cilindro=$_POST['cilindro'];
$trans=$_POST['transmicion'];
$cadena="UPDATE vehiculos SET smotor='$motor' , kilometraje ='$km' , clave_vehicular='$clave' , cilindraje='$cilindro' , transmision='$trans' where id_conductor = ".$_SESSION['id_usuario']."";

mysqli_query($con,$cadena);
header("location:Menu.php?llamar=15");

?>