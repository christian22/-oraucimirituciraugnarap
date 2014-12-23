<?php @session_start();?>
<?php 
include("conexion.php");

$auto=$_GET['id_vehiculo'];


$query="DELETE FROM vehiculos WHERE id_vehiculo='$auto' AND id_conductor=".$_SESSION['id_usuario']."";

mysqli_query($con,$query);
header("location:Menu.php?llamar=1");
?>

