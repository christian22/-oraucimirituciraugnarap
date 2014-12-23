<?php 

	if(isset($_REQUEST['bty'])){

include ("conexion.php");
$Ti=$_POST["Titulo"];
$Co=$_POST["Comtenido"];
$Fo=$_POST["foto"];
$cadena="insert into noticias (titulo,contenido,imagenes) values('$Ti','$Co','$Fo')";

$exito=mysqli_query($con,$cadena);
if ($exito){

		echo "La noticia Fue publicada Correctamente ";
	}
else{
		echo "Nose en que te equivocaste";  echo $cadena; 
		
	}

}

?>
