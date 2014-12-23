<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Super Usuario</title>
        <link rel="stylesheet" href="css/sRegistro_mecanico.css">	
 
	</head>
<body>
        <div id="contenedor">
							<h2  align="center">Consultar Mecanicos</h2>
				<table id="t1" border="0">
						<form action="" method="post" onsubmit="return confirmar(this)">
							<tbody>
								<tr>
								  <td><label>Buscar:</label></td> 
                                                                  <td> <input type="search" name="bus" value="" placeholder="Busca por Nombre" autofocus="autofocus"/></td> 
                                                                  <td> <input type="submit" name="busc" value="Buscar"/></td>
								</tr>
								<tr>
								  <td>&nbsp; </td>
								</tr>
							</tbody>
						</form>
				</table>
				
				<?php require 'aphp/consult2.php'; ?>
				<?php require 'aphp/borrar.php'; ?>
				
	<input type="button" onclick=" location.href='Menu.php'" value="Volver"/>
          <!--  <td> </td>-->
			
            </div>
			
    
 
       </body>
       
</html>
