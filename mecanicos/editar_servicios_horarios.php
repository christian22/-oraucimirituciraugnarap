<?php @session_start() ;
 require 'conexion.php'; 
 $varmystic = $_SESSION['id_meca'];
 require 'visible.php';
?>
<!DOCTYPE html>

<html lang="en">
    <head>
	<meta charset="utf-8">
	<title>Super Usuario</title>              
        <link rel="stylesheet" type = "text/css" href="css/sServicios_horarios.css"/>    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
    </head>
    <body> 

        <div id="caja">
            <h2>Servicios y Horarios</h2>
            <div id="contenedor">
                <form method="post" action="" class="registro">
                <label class="titulo" for="horario">Servicios</label>
                    <div> 
                        <input type="checkbox"  name="afinacion" value="1.">Afinacion<br>
                        <input type="checkbox"  name="frenos" value="1">Frenos<br>
                        <input type="checkbox"  name="aceite" value="1">Cambio de Aceite<br>  
                        <input type="checkbox"  name="transmision" value="1">Transmision<br>
                        <input type="checkbox"  name="inyeccion" value="1">Inyeccion electrica y Mecanica<br>     
                        <input type="checkbox"  name="chapa" value="1">Chapa y pintura<br>
                        <input type="checkbox"  name="electricidad" value="1">Electricidad automotriz<br>
                        <input type="checkbox"  name="lubricacion" value="1">Lubricacion<br><br>
                    </div>
                <label class="titulo" for="horario">Horario</label>
                    <div> 
                        <input type="radio"  name="domingo" value="1">Domingo<br>
                        <input type="radio"  name="lunes" value="1">Lunes<br>
                        <input type="radio"  name="martes" value="1"> Martes<br>  
                        <input type="radio"  name="miercoles" value="1">Miercoles<br>
                        <input type="radio"  name="jueves" value="1">Jueves<br>     
                        <input type="radio"  name="viernes" value="1">Viernes<br>
                        <input type="radio"  name="sabado" value="1">Sabado<br>
                    </div>
                <div class="errors error1"></div>
                <input  name="guardar" type="submit" value="Guardar">
                <input type="Reset" value="Limpiar Formulario">
                
                </form>
                <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
                    <script type="text/javascript">
                        $(".registro").submit( function(){
                        var check = $("input[type='checkbox']:checked").length;
                        var radio = $("input[type='radio']:checked").length;
                        if(check == ""){
                            alert('Seleccione al menos servicio!');
                            return false;
                        }
                        else if(radio == ""){
                            alert('Seleccione al menos un dia!');
                            return false;
                        }
                        else {
                            <?php
                                $rev= "SELECT id_meca FROM dias_semana";
                                $result=mysqli_query($con,$rev);
                                while($reg=mysqli_fetch_array($result)){
                                    $varmagic=$reg["id_meca"];
                                }
                                if($varmagic != $varmystic){
                            ?>
                                    $('.errors').hide();
                                    alert('Sus Datos fueron registrados correctamente');
									location.href="Menu.php?llamar=2";
                                    return true;
                                    <?php  require 'insert_hor_serv.php'; ?>
                            <?php
                                }
                                else{
                            ?>
                                    $('.errors').hide();
									
                                    alert('Sus Datos fueron actualizados correctamente');
									location.href="Menu.php?llamar=2";									
                                    return true;
                                    <?php  require 'update_hor_serv.php';} ?> 
                        }   
                    });
                    </script>
            </div>
        </div>
    </body>
</html>