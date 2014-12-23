<?php session_start();?>

<?php
	if(isset($_GET["id"])){// recive la id del mecanico a borrar
	
$x=$_GET["id"];// renombramos la varible
$s=$_SESSION['id_usuario'];
	
include("conexion_stark.php");

$query="DELETE FROM mis_contactos WHERE id_usuario=$s AND id_meca=$x; "; // consulta que 
mysqli_query($con,$query);
mysqli_close($con);
 }
?>
<script>
    location.href="Menu.php?llamar=4";// uan vez que borra redireciona a mis mecanicos
</script>