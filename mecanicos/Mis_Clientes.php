<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Mis clientes</title>
        <link rel="stylesheet" href="css/sMisClientes.css">
            <link rel="stylesheet"  href="css/Hover_Animation.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>    
    </head>
    <body>
     
                <!--gggggggggggggggggggggggggggggg-->
        <div class="caja">          
            <div class="titulo">
                <h1>Mis clientes</h1>
            </div>
            <div class="datagrid"> 
                <form name="envio" id="cliente"  action="eliminar_cliente.php" method="post">
                <table>
                    <?php
                    
                        include("conexion.php");
                        $cadena="SELECT * FROM mis_contactos 
                            JOIN mecanicos JOIN usuarios
                            ON  mis_contactos.id_usuario = usuarios.id_usuario AND
                            mis_contactos.id_meca  = mecanicos.id_meca 
                            AND mis_contactos.id_meca= $_SESSION[id_meca]";//consulta
                        $result=mysqli_query($con,$cadena);
                            //print_r($result);
                        $i=0;
                        while($reg=mysqli_fetch_array($result)){
                                $profile=$reg["profile"];
                                $nombre=$reg["nombre"];
                                $app=$reg["apellidop"];
                                $apm=$reg["apellidom"];
                                $email=$reg["email"];
                                $clien=$reg["id_usuario"];  
                    ?>     
                             
                            <tbody class="tabla">    
                                <tr class="fila_<?php echo $i%2;?>">
                                    <td><img class="imagenperfil" src="<?php echo $profile;?>"/></td>
                                    <td><a href="Menu.php?llamar=11&cliente=<?php echo $clien ; ?>" ><?php echo "$nombre\n", "$app\n", "$apm\n";?></a></td> 
<!--                                    <td></?php echo $email;?></td>                       
                                    <td>

                                        a onclick="confirmDel();" href="eliminar_cliente.php?cliente=<?//php echo $clien; ?>"
                                        <input type="button" onclick="confirmDel()" name="eliminar" class="push" value="Eliminar"/></a>

                                    </td>  -->
                                </tr>
                            </tbody>
                 
                    <?php            
                        $i ++;
                        }
                    ?>
                            
                    

                </table>
                </form>
            </div>
        </div>
        <?php
            
            mysqli_free_result($result);
            mysqli_close($con);
        ?>
 <script type="text/javascript">
            
            function confirmDel(){
            var x= <?php echo $clien; ?>   
                var name=confirm("¿seguro que desea eliminar?"+ x)
                //
                if(name== true){
                $.post("eliminar_cliente.php",{eli:x});
                                      
                }
                else{
                    location.href="Menu.php?llamar=8";
                    
                }
                 }
        </script> 
    </body>
</html>