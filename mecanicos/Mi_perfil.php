<?php
@session_start();  
	/*aqui declaro la varible de secion de forma local*/
	
$z=$_SESSION['id_meca'];
$y=$_SESSION['contraseña'];
//print_r($z);
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Mi Perfil</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type='text/css' href="css/mi_perfil.css" /> 
        <link rel="stylesheet"  href="css/Hover_Animation.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>		
    </head>
    <body>
 
        <!--&&&&&&&&&&&&&&&&&&&&&&&& perfil mecanico &&&&&&&&&&&&&&&&&&&&&&&&--> 
        <div class="caja" >
            <?php 
                include("conexion.php");

                if(isset($z)){
                    $consulta = "SELECT * FROM mecanicos WHERE id_meca=$z";
                    $rs = mysqli_query($con,$consulta);
                    
                    while ($reg = mysqli_fetch_array($rs)){
                        $id=$reg["id_meca"];
                        $nombre=$reg["nombre"];
                        $app=$reg["apellidop"];
                        $apm=$reg["apellidom"];
                        $taller=$reg["empresa"];
                        $rfc=$reg["rfc"];/* se extraee todo lo que se necesita por el momento de la bd */
                        $calle=$reg["calle"];
                        $colonia=$reg["colonia"];
                        $cp=$reg["cp"];
                        $email=$reg["email"];
                        $tel=$reg["telefono"];
                        $contrasena=$reg["contrasena"];
                        $cel=$reg["cel"];
                        $ver="readonly";
                    }
                }
            ?>
            <div class="titulo">
                <h1>Mi perfil</h1>
            </div>
            
            <div class="datosPersonales">
                <h3>Datos personales:</h3>           
                <label1>Nombre(s):</label1>
                    <input type="text" name="nombre"   value="<?php echo $nombre;?>" <?php echo $ver;?> >
                <label2>Apellido Paterno:</label2>
                    <input type="text" name="apellidop"  value="<?php echo $app;?>" <?php echo $ver;?> >
                <label3>Apellido Materno:</label3>
                    <input type="text" name="apellidom"   value="<?php echo $apm;?>" <?php echo $ver;?> >
                <label4>Tel.Celular:</label4>
                    <input type="text" name="cel"   value="<?php echo $cel;?>" <?php echo $ver;?> >
                <label5>Correo electronico:</label5>
                    <input type="text" name="email"   value="<?php echo $email;?>" <?php echo $ver;?> >
                <a href="#cambiarPassword"  name="a1">Cambiar contraseña</a>
            </div>
            
		
            <!--&&&&&&&&&&&&&&&&&&&&&&&& datos del taller &&&&&&&&&&&&&&&&&&&&&&&&-->   
            <div class="datosTaller">    
                <h3>Datos del taller:</h3>    
            <!-- <form method="post" action="" class="Datos del taller">-->
                    <label1>Nombre del taller:</label1>
                        <input type="text" name="empresa" value="<?php echo $taller;?>"  <?php echo $ver;?> >
                    <label2>RFC: </label2>
                        <input type="text" name="rfc" value="<?php echo $rfc ;?>" <?php echo $ver;?> >               
                    <label3>Calle y numero: </label3>
                        <input type="text" name="calle" value="<?php echo $calle ;?>"<?php echo $ver;?>  >
                    <label4>Colonia: </label4>
                        <input type="text" name="colonia" value="<?php echo $colonia ;?>" <?php echo $ver;?> >              
                    <label5>C.P: </label5>
                        <input type="text" name="cp" value="<?php echo $cp ;?>" <?php echo $ver;?> >   
                    <label6>Telefono: </label6>
                        <input type="text" name="telefono" value="<?php echo $tel ;?>" <?php echo $ver;?> >
            </div>
            <!--<td><input type="button" onclick="location.href='Menu.php?llamar=3'" value="Editar"</td>-->
            <input type="submit" name="Volver" class="push" onclick="location.href='Menu.php'" value="Volver">
        </div>
        
        <!--&&&&&&&&&&&&&&&&&&&&&&&&  cambiar contraseña en modal &&&&&&&&&&&&&&&&&&&&&&&&-->
        <div id="cambiarPassword" class="modalmask">
            <div class="modalbox movedown">
                <a href="#close" title="Close" class="close">X</a>        
                <label1>¡Reestablecer contraseña!</label1>
                <form action="" method="post">  
                    <input type="password" name="contv" placeholder="Contraseña actual" required="" value="" autofocus="autofocus"/>		
                    <input type="password" name="contn" placeholder="Nueva contraseña" required="" value=""/>				
                    <input type="password" name="contn2" placeholder="Confirmar nueva contraseña" required="" value=""/>					              
                    <input type="submit" name="btnE" value="Guardar" class="push"/>
                    <input type="submit" name="btnC" class="push" onclick="location.href='#close'"value="Cancelar"/>		
                </form>				
                    <?php				
                        require'validar_contra.php';
                        /*aqui contiene tada la magia */				
                    ?>    									
                    <a class="close" href="#close"></a>
            </div>
        </div>        
        
    </body>
</html>