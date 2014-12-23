
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Super Usuario</title>
                <link rel="stylesheet" href="css/sPublicarNoticias.css">	
                <!--<link rel="stylesheet" href="css/sPublicarNoticias.css">-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
                

				
				
<script type="text/javascript">

var miPopup 
function ventanaSecundaria(pagina){ 
    miPopup = window.open(pagina,"miwin","width=600,height=500,scrollbars=yes") 
    miPopup.focus() 
} 


function validacion() {
  if ( document.getElementById("nombre").value=="") {
    // Si no se cumple la condicion...
    alert('PONLE TITULO');
    return false;
  }
  else if (document.forms[0].elements[1].value=="") {
    // Si no se cumple la condicion...
    alert('ESCRIBA CONTENIDO');
    return false;
  }
  
 /* else if (document.forms[0].elements[2].value=="") {
    // Si no se cumple la condicion...
    alert('INGRESA UNA IMAGEN');
    return false;
  }*/
    else if (document.forms[0].elements[3].value=="") {
    // Si no se cumple la condicion...
    alert('INGRESA UNA FECHA');
    return false;
  }
 

  return true;
}
</script>
</head>

<body style="font-family:Arial, Tahoma">

<div id = "contenedor">
<H1 style="text-align:center">Publicar Noticias</H1>
<br>
<form method="post" action="" name="form1" onSubmit="return validacion()">
<table width="250" border="0" align="center">
  <tbody>
    <tr>
      <td>Titulo</td>
      <td><input type="text" name="Titulo" size="50" maxlength="50" id="nombre" > </td>
    </tr>
    <tr>
      <td>Contenido</td>
      <td><input type="textarea" name="Comtenido" size="50" maxlength="100"></td>
    </tr>


       <tr>
    <tr><td align="left" width="20%">
    <br>Foto </td><td><br><input type="text" name="foto" size="50" ></input> <a href="javascript:ventanaSecundaria('aphp/foto.php')">Buscar Imagen...</a><br></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit"name="bty"  value="Grabar"> <input type="reset" value="Limpiar"> <input type="button" value="volver" onclick="location.href='menu.php'" >  </td>
    </tr>
  </tbody>
</table>
</form>

<?php
		require'aphp/Guardar_Noticia.php';
		?>
</div> 
        
		
		
		
    </body>
</html>
