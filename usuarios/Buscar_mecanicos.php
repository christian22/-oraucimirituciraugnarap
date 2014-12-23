<?php @session_start(); ?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Buscar Mecanicos o talleres sirve</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/Index/1.ico">
        <link rel="stylesheet" href="css/sBuscar_mecanicos.css"/>
    </head>
    <body>           		
        <!-- apartir de aqui se mostrara la un caja con los elementos y funcionalidades -->
        <div class="caja"> 
            <div class="titulo">
                <h1>Encontrar mecanicos</h1>
            </div>
            <form id="for" method="post" action="">
                <div class="buscarBtns">
                    <input type="search" placeholder="Busca por nombre del mecánico, taller o servicio" name="Buscar"/><!--variable buscar-->
                    <input type="image" name="boton" src="images/lupa.png" align="middle">
                </div>	 
                <div class="datagrid">    
                    <table> <!--inicio de la tabla para mostrar nombres-->	
                        <?php
                            require("conexion_stark.php");//inicia conexion				
//                                      $_POST["Buscar"];// mando lo que esta en la variable Buscar
                            @$palabra=$_POST['Buscar']; // la variable buscar pasa ser llamada palabra
                            if($palabra== ""){
                                $cadena="SELECT mecanicos.profile, mecanicos.nombre, mecanicos.apellidop, mecanicos.apellidom, mecanicos.empresa, mecanicos.id_meca FROM mecanicos JOIN servicios JOIN dias_semana 
                                ON dias_semana.id_meca = mecanicos.id_meca AND servicios.id_meca = mecanicos.id_meca 
                                AND mecanicos.status=1";
                            }else{ // consulta..// verifica que la cadena no este vacia  
                                $cadena="SELECT mecanicos.profile, mecanicos.nombre, mecanicos.apellidop, mecanicos.apellidom, mecanicos.empresa, mecanicos.id_meca FROM mecanicos JOIN servicios JOIN dias_semana 
                                ON dias_semana.id_meca = mecanicos.id_meca AND servicios.id_meca = mecanicos.id_meca 
                                AND mecanicos.status=1 WHERE mecanicos.nombre LIKE '%$palabra%'OR mecanicos.empresa LIKE '%$palabra%' ";
                            }// consulta..
                            $result=mysqli_query($con,$cadena);                
                            $i=0;
                            while($reg=mysqli_fetch_array($result)){ // ciclo para que recorra lo que se mandara a llamar
                                    $profile=$reg["profile"];
                                    $nombre=$reg["nombre"];
                                    $apellidop=$reg["apellidop"];
                                    $apellidom=$reg["apellidom"];
                                    $empresa=$reg["empresa"];
                                    $id=$reg["id_meca"];
                                    $taller="Taller";			  
                        ?>
                                <tbody class="tabla">    
                                    <tr class="fila_<?php echo $i%2;?>">
                                        <td><img class="imagenperfil" src="<?php echo $profile;?>"/></td>
                                        <td><a href='Menu.php?llamar=9&varID=$id'><?php echo "$nombre\n", "$apellidop\n", "$apellidom\n";?></a></td><!--al hacer click en el nombre mostara sus datos-->  
                                        <td><?php echo "$taller\n",$empresa;?></td>                       
                                        <td>
                                            <input type="button" name="agregar" onclick="location.href='Insert_mecanico.php?varID=<?php echo $id; ?>'"value="Agregar"/>
                                        </td>                                    
                                    </tr>
                                </tbody>
                        <?php
                            $i++;
                            }//cierra while
                        ?>
                    </table>
                </div>	 	
            </form>           	
        </div>
    </body>
</html>