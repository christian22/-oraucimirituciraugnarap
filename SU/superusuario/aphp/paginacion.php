<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>

<body style="font-family:Arial, Tahoma">

<!--<table width="800" border="0" align="center">
  <tbody>
    <tr>
      <td style="text-align:right"><a href="agregarcontacto.html"> Agregar</a></td>
      <td><img src="../hacienda blubay/img/band_mexico.png" id='imgcontacto' width="100" height=100> </td>
      <td><a href="salir.php">Cerrar sesion</a> </td>
    </tr>
  </tbody>
</table>-->
<br>


<table id="meca">
<?php
include("conexion.php");
###PAGINACION
if(isset($_GET["bus"])){
		$x = $_GET["bus"];
$consulta_noticias = "SELECT *FROM mecanicos WHERE  nombre LIKE '%$x%'OR empresa LIKE '%$x% 'OR apellidop LIKE '%$x%'OR apellidom LIKE'%$x%' AND mecanicos.status=1 ";
$rs_noticias = mysqli_query($con,$consulta_noticias);
$num_total_registros = mysqli_num_rows($rs_noticias);


$TAMANO_PAGINA =10;
    
    if(isset($_GET["pagina"])){$pagina=$_GET["pagina"];
            
            $inicio = ($pagina - 1) * $TAMANO_PAGINA;}
            
            
    else{$inicio = 0;$pagina = 1;}



$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);


$consulta = "SELECT *FROM mecanicos WHERE  nombre LIKE '%$x%'OR empresa LIKE '%$x% 'OR apellidop LIKE '%$x%'OR apellidom LIKE '%$x%' AND mecanicos.status='1'  LIMIT ".$inicio."," . $TAMANO_PAGINA ;
$rs = mysqli_query($con,$consulta);
$color="#dddddd";
while ($reg = mysqli_fetch_array($rs)) {
   $id=$reg["id_meca"];
	$nombre=$reg["nombre"];
	$app=$reg["apellidop"];
	$apm=$reg["apellidom"];
	$taller=$reg["empresa"];
	
	echo "<tr  style='background-color:$color'>";
	echo "<td><a href='Ficha_Tecnica_Mecanicos.php?rxcv=".$id."'>$nombre $app $apm </a></td>";
	echo "<td> $taller </td>";
	echo "<td> <form name='f3' action='aphp/borrar.php' method='get'> 
				<input type='hidden' name='vbfn' value=".$id.">
				<input type='submit' value='Eliminar' />
		</form> </td>";
	
	echo "</tr>";
	if($color=="#dddddd"){$color="#ffffff";}else{$color="#dddddd";}
}



mysqli_free_result($rs);
mysqli_close($con);


## FIN DE PAGINACION	

echo "</table>";
echo "<br><table>
<tr><td>";
if ($total_paginas > 1) {
   if ($pagina != 1)
      echo '<a href=Consultar_Mecanicos.php?pagina='.($pagina-1).'>Anterior</a> &nbsp;';
      for ($i=1;$i<=$total_paginas;$i++) {
         if ($pagina == $i)
            
            echo $pagina;
         else
            echo "<a href=Consultar_Mecanicos.php?pagina=".$i.">".$i."</a>&nbsp;";
      }
      if ($pagina != $total_paginas)
         echo '<a  href=Consultar_Mecanicos.php?pagina='.($pagina+1).'>Siguiente >> </a>';
}
echo "<td><tr></table>";
}
?>
    
</body>
</html>