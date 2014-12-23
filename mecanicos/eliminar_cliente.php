<?php @session_start();
require('conexion.php');?>
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

        <div id="caja">
            
        <?php
        $idcon=$_GET["cliente"];
        $cadena= "SELECT * FROM usuarios WHERE id_usuario = $idcon";
        $result= mysqli_query($con,$cadena);
        while($reg=mysqli_fetch_array($result)){
          
            $profile=$reg["profile"];
            $client=$reg['id_usuario'];
            $nombre=$reg["nombre"];
            $app=$reg["apellidop"];
            $apm=$reg["apellidom"];
            $email=$reg["email"];
            $celular=$reg['celular'];
        }
        ?>
            
             <form method="post" action="Menu.php?llamar=15">
<ul1>
<li1 class="izquierda">
  <div>
    <span class="completo">
        <img class="imagenperfil" src="<?php echo $profile;?>"/>
        <label for="modelo"> Cliente: </label>
        <input type="text" id="cliente" readonly name="cliente" value="<?php echo" ".$nombre." ".$app." ".$apm."";?>"/>
    </span><br>
    <span class="completo">
        <label for="modelo"> Email: </label>      
        <input type="text" id="modelo" readonly name="modelo" value="<?php echo $email;?>"/>
    </span><br>
    <span class="completo">
        <label for="modelo"> Celular: </label>
        <input type="text" id="modelo" readonly name="modelo" value="<?php echo $celular;?>"/>
    </span><br>
   </div>
    <input type="button" onclick="confirmDel()" name="eliminar" class="push" value="Eliminar"/>
    <input type="button" onclick="location.href='?llamar=8'" name="volver" value="Volver"/>

</li1>
            
      
 <script type="text/javascript">
            
            function confirmDel(){
            var x= <?php echo $client; ?>   
                var name=confirm("¿seguro que desea eliminar?"+ x)
                //
                if(name== true){
                $.post("eliminar.php",{eli:x});
                                      
                }
                else{
                    
                    
                }
                 }
        </script> 
     
      <?php
            
            mysqli_free_result($result);
            mysqli_close($con);
        ?>
        </div>
    </body>
</html>