<?php @session_start();?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Mis Mecanicos</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/sMis_mecanicos.css"/>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
    </head>
    <body>
             
        <!-- desde aqui ara tanto la funcioanlidad -->
        <div class="caja">
            <div class="titulo">
                <h1>Mis mecanicos</h1>
            </div>
            <div class="datagrid">    
                <table>              
                    <?php
                        require("conexion_stark.php");
                        $cadena="SELECT mecanicos.profile, mecanicos.nombre, mecanicos.apellidop, mecanicos.apellidom,
                           mecanicos.empresa, mecanicos.id_meca FROM mis_contactos JOIN mecanicos JOIN usuarios
                           ON  mis_contactos.id_usuario = usuarios.id_usuario AND
                           mis_contactos.id_meca  = mecanicos.id_meca 
                           AND mis_contactos.id_usuario= $_SESSION[id_usuario]
                           AND mecanicos.status=1";//consulta
                        $result=mysqli_query($con,$cadena);
                        //print_r($result);
                        $i=0;
                        while($reg=mysqli_fetch_array($result)){
                                $profile=$reg["profile"];
                                $nombre=$reg["nombre"];
                                $apellidop=$reg["apellidop"];
                                $apellidom=$reg["apellidom"];
                                $empresa=$reg["empresa"];
                                $ver=$reg["id_meca"];
                                $taller="Taller";
                    ?>
                            <tbody class="tabla">    
                                <tr class="fila_<?php echo $i%2;?>">
                                    <td><img class="imagenperfil" src="<?php echo $profile;?>"/></td>
                                    <td><a href='Menu.php?llamar=10&varID=$ver'><?php echo "$nombre\n", "$apellidop\n", "$apellidom\n";?></a></td> 
                                    <td><?php echo "$taller\n",$empresa;?></td>                       
                                    <td>
                                        <input type="button" name="agendar" onclick="location.href='Menu.php?llamar=8&id=<?php echo $ver; ?>'"value="Agendar cita"/>
                                    </td>                                    
                                    <td>
                                        <input type="button" name="eliminar" onclick="location.href='borrar_mecanico.php?id=<?php echo $ver; ?>'"value="Eliminar"/>
                                    </td>  
                                </tr>
                            </tbody>
                    <?php
                        $i ++;
                        }
                    ?>
                </table>  
            </div>
        </div>
        <?php      
            mysqli_free_result($result);
            mysqli_close($con);
        ?>                        
    </body>
</html>