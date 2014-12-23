<?php
@session_start();  
	/*aqui declaro la varible de secion de forma local*/
$r=$_SESSION['id_usuario'];
$y=$_SESSION['contraseña'];
//print_r($z);
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title> Mi Perfil </title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/Index/1.ico">
        <link rel="stylesheet" href="css/mi_perfil.css" type='text/css'/> 
        <link rel="stylesheet" href="css/Hover_Animation.css" type='text/css'/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>	
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>  
        <script type="text/javascript">
            $(document).ready(function(){
                $('#estado').change(function(){
                    var id=$('#estado').val();
                    $('#muni').load('Funciones_usuario.php?id='+id);
                });    
            });
        </script>
    </head>
    <body>
     
        <!--&&&&&&&&&&&&&&&&&&&&&&&& perfil Usuario &&&&&&&&&&&&&&&&&&&&&&&&--> 
        <div class="contenedor" > 
            <?php 
               include("conexion.php");

               if(isset($r)){
                   $consulta = "select * from usuarios where id_usuario =$r";
                   $rs = mysqli_query($con,$consulta);
                   while ($reg = mysqli_fetch_array($rs)) {
                       $id=$reg["id_usuario"];
                       $nombre=$reg["nombre"];
                       $app=$reg["apellidop"];
                       $apm=$reg["apellidom"];     /* se extrae todo lo que se necesita por el momento de la bd */
                       $calle=$reg["calle"];
                       $colonia=$reg["colonia"];
                       $estado=$reg["estado"];
                       $municipio=$reg["municipio"];
                       $cp=$reg["cp"];
                       $email=$reg["email"];       
                       $contrasena=$reg["contrasena"];
                       $cel=$reg["celular"];
                       $ver="false";
                     }}
           ?>
            <!---Datos personales del usuario-->
            <div class="titulo">
                <h1>Configuración de mi cuenta</h1>
            </div>  
     
            <form method="get" action="modifica_usuario.php">
                <div class="datosP_usuarios">
                    <h3>Datos personales:</h3>
                    <label1>Nombre(s):</label1>             
                       <input  type="text" name="nombre"  value="<?php echo $nombre;?>"  <?php echo $ver;?> >
                       <input type="hidden" id="ids" name="idc" value="<?php echo $id; ?>">  
                    <label2>Apellido Paterno:</label2>
                       <input type="text" name="apellidop" value="<?php echo $app;?>" <?php echo $ver;?> >
                    <label3>Apellido Materno:</label3>
                       <input type="text" name="apellidom" value="<?php echo $apm;?>" <?php echo $ver;?> >
                    <label4>Correo Electronico:</label4>
                       <input type="text" name="email" value="<?php echo $email;?>" <?php echo $ver;?> >
                    <label5>Telefono Celular:</label5>
                       <input type="text" name="celular" value="<?php echo  $cel ;?>" <?php echo $ver;?> >
                    <a href="#cambiarPassword" name="a1">Cambiar contraseña</a>         
                </div>
           
                <!---Informacion adicional-->
                <div class ="info_adicional" >   
                    <h3>Información adicional:</h3>  
                         <?php
                            $consulta=mysqli_query($con,"select id,nombre from estados order by nombre ASC");
                            echo "<select name='estado' id='estado'>";
                            echo "<option>".$estado."</option>";
                            while ($fila=mysqli_fetch_array($consulta)){
                                echo "<option value='".$fila["nombre"]."'>".utf8_encode($fila["nombre"])."</option>";
                                
                                $estado=  utf8_encode($fila["nombre"]);
                            }
                            echo "</select>";
                          ?>
                    <label1>Estado:</label1> <!--hgroup que contiene los estados no pude con los municipios lel-->
                    <!---<select id="subjet" name="estadoAD" >
                    <option value="">Selecciona una opción</option> ---->
                   
                    <label2>Municipio:</label2>
                        <div id='muni'><!---Div que tiene como funcionalidad, mostrar los municipios---->               
                            <select  name="municipio">
                                <option value=" "><?php echo utf8_encode($municipio);?></option>
                             </select>
                         </div>
                    
                    <label3>Calle y Número:</label3>
                        <input type="text" name="calle" value="<?php echo  $calle ?>" <?php echo $ver ?>>
                    <label4>Colonia:</label4>
                        <input type="text" name="colonia" value="<?php echo $colonia ?>" <?php echo $ver ?>>          
                </div>     
<<<<<<< HEAD
                <input type="submit"  name="btn" class="wobble-vertical" value="Guardar" >                        
                <input type="submit" name="Volver" class="wobble-vertical" onclick="location.href='Menu.php'" value="Volver">
=======
                <input type="submit"  name="btn" class="push" value="Guardar" >                        
                
>>>>>>> 91b73f45985b01a28a39d65aeda859a02fecba39
            </form>
                <input  type="submit" name="Volver" class="push" onclick="location.href='Menu.php'" value="Volver">
            <!--&&&&&&&&&&&&&&&&&&&&&&&&  cambiar contraseña en modal &&&&&&&&&&&&&&&&&&&&&&&&-->
            <div id="cambiarPassword" class="modalmask">
                <div class="modalbox movedown">
                    <a href="#close" title="Close" class="close">X</a>        
                    <label1>¡Reestablecer contraseña!</label1>
                    <form action="" method="post">  
                        <input type="password" name="contv" placeholder="Contraseña actual" required="" value="" autofocus="autofocus"/>		
                        <input type="password" name="contn" placeholder="Nueva contraseña" required="" value=""/>				
                        <input type="password" name="contn2" placeholder="Confirmar nueva contraseña" required="" value=""/>					              
                        <input type="submit" name="btnE"class="push" value="Guardar"/>
                        <input type="submit" name="btnC" class="push" onclick="location.href='#close'"value="Cancelar"/>		
                    </form>          			
		   <?php				
                        require'validar_contrasena.php';
			/*aqui contiene tada la magia */
		    ?>    						
                    <a class="close" href="#close"></a>
                </div>
            </div>
		
        </div>  
    </body>
</html>

 