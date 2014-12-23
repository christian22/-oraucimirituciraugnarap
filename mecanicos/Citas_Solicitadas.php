<?php
@session_start();  
	/*aqui declaro la varible de secion de forma local*/
	
$z=$_SESSION['id_meca'];
$y=$_SESSION['contraseña'];
//print_r($z);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
       
        <link rel="stylesheet" href="css/sCitasSolicitadas.css" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>   
    </head>
    <body>
         <div id="caja">
            <h2 align="center">Citas Solicitadas</h2> 
            <table align="center" class="t1" >
                <tr>
                    <td><label>Nombre del Cliente</label></td>
                    <td><label>Fecha Propuesta</label></td>   
                    <td><label>Descripcion del Problema</label></td>   
                </tr>
                <?php
                    include("conexion.php");
                        $cadena="SELECT usuarios.nombre, usuarios.apellidop, usuarios.apellidom,
                         usuarios.id_usuario, evenement.id, evenement.start, evenement.title  FROM evenement JOIN mecanicos JOIN usuarios
                        ON  evenement.id_user = usuarios.id_usuario AND
                        evenement.id_mec  = mecanicos.id_meca 
                        AND evenement.id_mec= $_SESSION[id_meca]
                        AND evenement.estado_cita=1";//consulta
                        $result=mysqli_query($con,$cadena);
                        //print_r($result);
                        $color="#dddddd";
                        while($reg=mysqli_fetch_array($result)){
                                $nombre=$reg["nombre"];
                                $app=$reg["apellidop"];
                                $apm=$reg["apellidom"];
                                $fecha=$reg["start"];
                                $desc=$reg["title"];
                                $ver=$reg["id"];
                                 echo "<tr style='background-color:$color'>";
                            echo "<td>$nombre $app $apm</td>";  
                            echo "<td>".$fecha."</td>";
                            echo "<td>".$desc."</td>";
                            echo "<td> <form name=colores action='Ver_Cita.php' method='get'>
                                       <input type='hidden' name='cita' value=".$ver.">
                                       <input type='submit' name='Aceptar' value='Aceptar'>
                                       <input type='submit' name='rechazar' value='Rechazar'>
                                  </form></td>";     
                            //redirecciona a una modal box con la descripcion del problema
                            echo "</tr>";
                            if($color=="#dddddd"){$color="#ffffff";}else{$color="#dddddd";}

                        }
                                mysqli_free_result($result);
                                mysqli_close($con);

                ?>
            </table>
        </div>
        
  

    </body>
