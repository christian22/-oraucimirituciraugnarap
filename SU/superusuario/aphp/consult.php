
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<script language="JavaScript" type="text/javascript">

function checkAGE(){

eliminar=confirm("¿Deseas eliminar este registro?");
   if (eliminar)
   //Redireccionamos si das a aceptar
     window.location.href = "delete.php?kdigo=valor"; //página web a la que te redirecciona si confirmas la eliminación
else
  //Y aquí pon cualquier cosa que quieras que salga si le diste al boton de cancelar
    alert('No se ha podido eliminar el registro...')
}
</script>

         
</head>

<body style="font-family:Arial, Tahoma">



<center > <table id="meca" width="600px" border="0" >
<?php
include("conexion.php");
###PAGINACION
				
		@$x = $_REQUEST["bus"];	
		$u=$_SESSION['id_su'];
		
		if($x==""){$consulta = "SELECT * FROM mecanicos WHERE STATUS=1";}
				else{$consulta = "SELECT * FROM mecanicos WHERE STATUS=1 AND nombre LIKE '%$x%'";}


$rs = mysqli_query($con,$consulta);
$color="#dddddd";
echo "<tr><td scope='col'><center>Nombre</center></th><td scope='col'><center>Empresa</center></th></tr>";
while ($reg = mysqli_fetch_array($rs)) {
   $id=$reg["id_meca"];
	$nombre=$reg["nombre"];
	$app=$reg["apellidop"];
	$apm=$reg["apellidom"];
	$taller=$reg["empresa"];
	
	echo "<tr  style='background-color:$color'>";
	echo "<td><a href='?opc=ficha&rxcv=$id'>".$nombre." ".$app." ".$apm." </a></td>";
	echo "<td> $taller </td>";
	echo "<td> <form name='f3' action='' method='post'> 
				<input id='kl' type='hidden' name='vbfn' value=".$id.">
				<input type='submit' name='b2' onclick='checkAGE()' value='Eliminar' />
		</form> </td>";
	
	echo "</tr>";
	if($color=="#dddddd"){$color="#ffffff";}else{$color="#dddddd";}
}
mysqli_free_result($rs);
mysqli_close($con);



?>
    </table></center>
</body>
</html>