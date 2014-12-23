
<?php


if (isset($_GET['news'])) { 
if (!ctype_digit($_GET['news'])) {

	echo "<center>no encontrado</center>";
	
}else{$id=$_GET['news'];
require'conexion.php';
$cadena= "SELECT * FROM noticias WHERE id_not=$id";
$resultado = mysqli_query($con,$cadena);
//print_r($resultado);
while($row=mysqli_fetch_array($resultado))
{
	
	echo"<center>
	
	
	
	<TABLE width=650 FRAME='void' RULES='rows'  >
	<TR>
		 <TD COLSPAN=2 ALIGN=center><h2>$row[titulo]</h2></TD>
	</TR>
	<TR>
		<TH COLSPAN=2 align=right >14/11/2014</TH>
	</TR>
	
	<TR>
		<TD ROWSPAN=5 Width=20% height=100%>
		
		</TD>
	</TR>
	<TR>
		<TD ROWSPAN=5 Width=0%>$row[contenido]</TD>
	</TR>
	
</TABLE> </center>" ;

}

}}else {echo "<center>no encontrado</center>";}
?>