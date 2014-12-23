
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Foto de perfil Mecanico</title>
		<link rel="stylesheet" href="css/sMenuPrincipalSU.css">
                <link rel="stylesheet" href="css/sPublicarNoticias.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
                <!--<link rel="stylesheet" href="css/sAltaMecanico.css">-->
		
	</head>
<body>
    <?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start(); 
include ("conexion.php");
?>
    


<!--initiate accordion-->

<script type="text/javascript">

var miPopup 
function ventanaSecundaria(pagina){ 
    miPopup = window.open(pagina,"miwin","width=600,height=500,scrollbars=yes") 
    miPopup.focus() 
} 



</script>
</head>

<body style="font-family:Arial, Tahoma">
<H1 style="text-align:center">Foto de perfil</H1>
<br>
<div id = "caja">
<form method="post" action="Guardar_foto.php" name="form1" onSubmit="return validacion()">
<table width="600" border="0" align="center">
  <tbody>
   
    
       <tr>
    <tr><td align="left" width="20%">
    <br>Foto </td><td><br><input type="text" name="foto" size="65" ></input> <a href="javascript:ventanaSecundaria('foto.php')">Buscar Imagen...</a><br></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit"  value="Grabar"> <input type="reset" value="Limpiar"></td>
    </tr>
  </tbody>
</table>
</form>
</div> 
       
    </body>
</html>
