<?php @session_start();?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Mis Vehiculos</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/sMenu_Principal_Usuario.css"/>
        <link rel="stylesheet" href="css/sConsultar_Citas.css"/> 
        <link rel="stylesheet" href="css/sMis_Vehiculos.css" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <style>
            #wrapper {
                font-size: 1em; 
                width: 180px; 
                position: relative;
                height:5px;
                background-color:#232323;
                box-shadow:0 2px 3px rgba(0,0,0,0.4);
                width:13%;
                position:fixed;
                z-index:101
            }        
        </style>    
    </head>
    <body>
        
        <div id="caja">
            <h2  align="center"> Mis Vehiculos</h2>
            <form id="for" method="get" action="">
            <div id="meses">
                <label>Buscar:</label>       
                <input type="search" id="Buscar" placeholder="Tipo/Modelo"/>
				   <input type="submit" name="add" value="Buscar"/>
            </div>
            
            <table width="500" align="center" border=2>
                <?php
                require("conexion_stark.php");
				
				@$palabra=$_POST['Buscar'];
				 if($palabra== ""){
				 
                $cadena="SELECT vehiculos.id_vehiculo, vehiculos.modelo, vehiculos.marca, vehiculos.anio,
                vehiculos.clave_vehicular, vehiculos.id_conductor FROM vehiculos JOIN usuarios
                ON  vehiculos.id_conductor = usuarios.id_usuario 
                AND  $_SESSION[id_usuario] = usuarios.id_usuario
                AND vehiculos.status=1";
                }
				else{
				$cadena="SELECT vehiculos.id_vehiculo, vehiculos.modelo, vehiculos.marca, vehiculos.anio,
                vehiculos.clave_vehicular, vehiculos.id_conductor FROM vehiculos JOIN usuarios
                ON  vehiculos.id_conductor = usuarios.id_usuario 
                AND  $_SESSION[id_usuario] = usuarios.id_usuario
                AND vehiculos.status=1 WHERE vehiculos.marca LIKE '%$palabra%' OR vehiculos.modelo LIKE '%$palabra%' " ;
				}
				
				$result=mysqli_query($con,$cadena);  
             $i=0;				
                $color="#dddddd";
                while($reg=mysqli_fetch_array($result)){
                        $modelo=$reg["modelo"];
                        $marca=$reg["marca"];
                        $tipo=$reg["anio"];
                        $clave=$reg["clave_vehicular"];
                        $ver=$reg["id_vehiculo"];
                       
                    echo "<tr style='background-color:$color'>";
                    echo "<td>".$modelo."</td>";
                    echo "<td>".$marca."</td>";
                    echo "<td>".$tipo."</td>";
                    echo "<td>".$clave."</td>";
                    
                    echo "<td> <a href=Menu.php?llamar=14&ver=".$ver."> ver </a> </td>";
                   echo "<td> <input type='button' name='eliminarV' onClick=location.href='eliminar_vehiculo.php?id_vehiculo=".$ver."' value='Eliminar'></a></td>";
                    
                    echo "</tr>";
                    if($color=="#dddddd"){$color="#ffffff";}else{$color="#dddddd";}
                }    mysqli_free_result($result);
                       // mysqli_close($con);
                ?>
                </table>
                
            <ul>
                <a href="Menu.php?llamar=0">Agregar Vehiculo</a>
            </ul>
        </div>
		</form>
        
        <div class="footer">
            <p class="rights">Copyright 2014 Pixki todos los derechos reservados<a href="#"> ir a inicio</a></p>
            <p class="volver"><a href="#"Volver arriba</a></p>
        </div>
    
    </body>
</html>