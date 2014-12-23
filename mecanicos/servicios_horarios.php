<?php @session_start() ;
 require 'conexion.php'; 
 $varmystic = $_SESSION['id_meca'];
 require 'visible.php';
 $ver="disabled";
?>
<!DOCTYPE html>

<html lang="en">
    <head>
	<meta charset="utf-8">
	<title>Super Usuario</title>   
        <link rel="stylesheet" type = "text/css" href="css/sServicios_horarios.css"/>       
    </head>
    <body> 

        <div id="caja">
            <h2>Servicios y Horarios</h2>
            <div id="contenedor">
                <form method="post" action="" class="registro">
                <label class="titulo" for="horario">Servicios</label>
                    <div> 
                        <input type="checkbox" <?php echo $a1;?> <?php echo $ver;?> name="afinacion" value="1.">Afinacion<br>
                        <input type="checkbox" <?php echo $a2;?> <?php echo $ver;?> name="frenos" value="1">Frenos<br>
                        <input type="checkbox" <?php echo $a3;?> <?php echo $ver;?> name="aceite" value="1">Cambio de Aceite<br>  
                        <input type="checkbox" <?php echo $a4;?> <?php echo $ver;?> name="transmision" value="1">Transmision<br>
                        <input type="checkbox" <?php echo $a5;?> <?php echo $ver;?> name="inyeccion" value="1">Inyeccion electrica y Mecanica<br>     
                        <input type="checkbox" <?php echo $a6;?> <?php echo $ver;?> name="chapa" value="1">Chapa y pintura<br>
                        <input type="checkbox" <?php echo $a7;?> <?php echo $ver;?> name="electricidad" value="1">Electricidad automotriz<br>
                        <input type="checkbox" <?php echo $a8;?> <?php echo $ver;?> name="lubricacion" value="1">Lubricacion<br><br>
                    </div>
                <label class="titulo" for="horario">Horario</label>
                    <div> 
                        <input type="radio" <?php echo $a9;?> <?php echo $ver;?> name="domingo" value="1">Domingo<br>
                        <input type="radio" <?php echo $a10;?> <?php echo $ver;?> name="lunes" value="1">Lunes<br>
                        <input type="radio" <?php echo $a11;?> <?php echo $ver;?> name="martes" value="1"> Martes<br>  
                        <input type="radio" <?php echo $a12;?> <?php echo $ver;?> name="miercoles" value="1">Miercoles<br>
                        <input type="radio" <?php echo $a13;?> <?php echo $ver;?> name="jueves" value="1">Jueves<br>     
                        <input type="radio" <?php echo $a14;?> <?php echo $ver;?> name="viernes" value="1">Viernes<br>
                        <input type="radio" <?php echo $a15;?> <?php echo $ver;?> name="sabado" value="1">Sabado<br>
                    </div>
                <div class="errors error1"></div>
                </form>
                <form method="post" action="Menu.php?llamar=10" class="cambio">
                    <input type="submit" name="editar" value="Editar">
                </form>
                
               
            </div>
        </div>
    </body>
</html>