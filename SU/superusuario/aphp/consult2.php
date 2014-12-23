<!DOCTYPE >
<html>
<head>
	<title>Paginaci&oacute;n de resultados</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<center > <table id="meca" width="600px" border="0" >
<?php
require("conexion.php");

//$url = "index.php";
		
@$x=$_REQUEST['bus'];
		
		if($x==""){$consulta = "SELECT * FROM mecanicos WHERE STATUS=1";}
				else{$consulta = "SELECT * FROM mecanicos WHERE STATUS=1 AND nombre LIKE '%$x%'";}



//$consulta_noticias = "SELECT * FROM mecanicos WHERE status=1"; // ESTA ES LA PRIMERA CONSULTA 

$rs_noticias = mysqli_query($con,$consulta );
$num_total_registros = mysqli_num_rows($rs_noticias);
//Si hay registros
if ($num_total_registros > 0){
	//Limito la busqueda
if($x==""){
	$TAMANO_PAGINA = 5;}else{$TAMANO_PAGINA = 50;}

	
        $pagina = false;

	//examino la pagina a mostrar y el inicio del registro a mostrar
        if (isset($_GET["pagina"]))
            $pagina = $_GET["pagina"];
        //if(ctype_digit($pagina))
        
	if (!$pagina) {
		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina - 1) * $TAMANO_PAGINA;
	}
	//calculo el total de paginas
	$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

	//echo '<p>Esto es un ejemplo de paginacion con PHP recogiendo los datos de los campos publicados en mi pagina principal.</p>';

	/*pongo el n�mero de registros total, el tama�o de p�gina y la p�gina que se muestra
	echo '<h3>Numero de articulos: '.$num_total_registros .'</h3>';
	echo '<h3>En cada vista se muestra '.$TAMANO_PAGINA.' campos ordenados por id de forma asendente.</h3>';
	echo '<h3>Mostrando la pagina '.$pagina.' de ' .$total_paginas.' paginas.</h3>';
*/

		if($x==""){$consulta = "SELECT * FROM mecanicos WHERE status=1  ORDER BY id_meca ASC LIMIT ".$inicio."," . $TAMANO_PAGINA;}
				else{$consulta = "SELECT * FROM mecanicos WHERE status=1 AND nombre LIKE '%$x%' ORDER BY id_meca ASC LIMIT ".$inicio."," . $TAMANO_PAGINA;}

					//$consulta_noticias = "SELECT * FROM mecanicos WHERE STATUS=1 AND nombre LIKE '%$x%'";


	//$consulta = "SELECT * FROM mecanicos WHERE status=1 ORDER BY id_meca ASC LIMIT ".$inicio."," . $TAMANO_PAGINA;  // AQUI HAY OTRA CONSULTA
	$rs = mysqli_query($con,$consulta);


	/*	echo '<center><table border="0" width="500">';
		echo '<th>NOMBRE</th>'; 
		echo '<th>TALLER</th>'; 
		*/
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
				<input type='submit' name='b2' value='Eliminar' />
		</form> </td>";
	
	echo "</tr>";
if($color=="#dddddd"){$color="#ffffff";}else{$color="#dddddd";}

		//echo '<a href="#">'.$row['id_meca'].' '.$row['nombre'].'</a><br>';
	}
mysqli_free_result($rs);
mysqli_close($con);
		

		
	echo ' <td> <p>';

	if ($total_paginas > 1) {
		if ($pagina != 1)
			echo '<a href="?opc=buscar&pagina='.($pagina-1).'"><img src="images/izq.gif" border="0"></a>';
		for ($i=1;$i<=$total_paginas;$i++) {
			if ($pagina == $i)
				//si muestro el Indice de la pagina actual, no coloco enlace
				echo "[".$pagina."]";
			else
				//si el �ndice no corresponde con la p�gina mostrada actualmente,
				//coloco el enlace para ir a esa p�gina
				echo '  <a href="?opc=buscar&pagina='.$i.'">'.$i.'</a>  ';
		}
		if ($pagina != $total_paginas)
			echo '<a href="?opc=buscar&pagina='.($pagina+1).'"><img src="images/der.gif" border="0"></a>';
	}
	echo '<p></td>';
	echo '</table></center>';
//}else {echo("<CENTER> <h2>NO HAY SERVICIO JOVEN!</h2></center>");}

}
?>
</body>
</html>