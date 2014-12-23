<?phpsession_start();?>
<?php

// conecxion para Detalles mecanico 2 agrega id meca id user a la tabla mis contactos
include_once("conexion_stark.php");
if(isset($_GET["varID"])){
$IDmeca=$_GET['varID'];
$cadena=("INDERT INTO mis_contactos(id_usuario,id_meca)VALUES('$_SESSION[id_usuario]','$IDmeca')");
mysqli_query($con,$cadena);

//mysql_query("INSERT INTO 'mis_contactos'('id_usuario','id_meca') VALUES('$_SESSION[id_usuario]','$idcont')");  
}
?> 