<html lang="es">
    <head>
        <title style= "color:white"> Pixkizuki </title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="INIT.css">
	</head>
        <body  style= "background-color:#041661" background="bback.gif">

                                <div  class="ico">
                                      
                                </div>
				<div class="lOG"> 
                                    <h1 class="ixki" >IXKI</h1>
                                                        <form id="FormIni" style="width: 88%" name="LogSU" method="post" action="">
                                                            <table class="table_inicio" border="0">
                                                                    <tr>
                                                                        <td>
									<label for="usuario" id="txtUsu" style= "color:white"> Usuario</label>
                                                                        </td>
                                                                        <td>
									<input type="text" name="nombre" id="nombre" title="Nombre" />
                                                                        </td>
                                                                        <td>
									<label for="No Empleado" id="" style= "color:white">No Empleado</label>
                                                                        </td> 
                                                                        <td>
									<input type="password" name="nempleado" id="contrasena" title="NoEmpleado" />	
                                                                        </td>
                                                                        <td>
									<label for="password" id="txt" style= "color:white">Contraseña</label>
                                                                        </td>
                                                                        <td>
									<input type="password" name="contrasena" id="contrasena" title="Contraseña" />
                                                                        </td>
                                                                        <td>
                                                                        <input type="submit" id="entrar" name="entrar" value="Iniciar" />
                                                                        </td>
                                                                    </tr>
                                                            </table>
                                                        </form>
                                                <?php require 'validar_superusuario.php'; ?>
                                </div>
    </body>
</html>