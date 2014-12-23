<?php session_start();
if(isset($_SESSION['Activa'])){
//$n=$_SESSION['nombre'];
//$ap=$_SESSION['apellidop'];
//$am=$_SESSION['apellidom'];
?>
<!DOCTYPE html>
<html lang="es" >
    <head>
        <title>Pixki</title>
        <meta charset="UTF-8"/>
        <link href="css/Menu/tabcontent.css" rel="stylesheet" type="text/css"/>
        <link href="css/Menu/bootstrap.min.css" rel="stylesheet">
        <script src="js/Menu/tabcontent.js" type="text/javascript"></script>
        <script src="js/Menu/jquery.min.js"></script>
        <script src="js/Menu/bootstrap.min.js"></script>
	<script>
            function myFunction() {  
                if (confirm("¿Esta seguro de cerrar sesión?") == true){
                    location.href="logout.php"
                }else{
                }
                document.getElementById("demo").innerHTML = x;
            }
        </script>		
    </head>
    <body style="font-family:Arial;">
				
				

    	<div id="navbar">
	<!--El logotipo y el icono que despliega el menú se agrupan-->
        <!--para mostrarlos mejor en los dispositivos móviles--> 
            <div id="navbar2">	
                <a href="Menu.php"><img class="logotipo" src="img/Menu/logoblanco.png" alt="Pixki" title="Pixki"/></a>                                    
            </div>
	</div>					
		
        <div class="ventana">
            <div class="uno">
            	<div class="wrapper">				
                    <ul class="tabs">
			<li><a href="#view1" onclick="setSrc()"> <img src="img/Menu/inicio.png"></a></li>
                        <li><a href="#view2" onclick="cambio()"> <img src="img/Menu/mecanico.png"></a></li>
			<li><a href="#view3" onclick="notas()"> <img src="img/Menu/noticia.png"></a></li>
                    </ul>  
						
                    <div id="view1">
			<ul>
                            <li class="subitem1"> <img src="img/cerrarsesion.png" style="width:20px; height: 20px;" > <a href="#" onclick="myFunction()" style="color: #EFFBFB;"><strong>Cerrar sesión </strong><span></span></a></li>
			</ul>
                    </div>
    
                    <div id="view2">
			<ul>
                            <li class="subitem1" > <img src="img/agregarauto.png" style="width:20px; height: 20px;"><a href="?opc=nuevo"  style="color: #EFFBFB;"><strong>Nuevo mecánico </strong><span></span></a></li> 
                            <li class="subtiem2" > <img src="img/buscarauto.png" style="width:20px; height: 20px;" > <a href="?opc=buscar"  style="color: #EFFBFB;"><strong> Consultar</strong><span></span></a></li>
			</ul>
                    </div>

                    <div id="view3">
			<ul>
                            <li class="subitem1"> <img src="img/publicarnotica.png" style="width: 20px; height: 20px;"> <a href="?opc=noticia"  style="color: #EFFBFB;"> <strong>Publicar </strong><span></span></a></li>
			</ul>
                    </div>	
						 
		</div>
            </div>
					
            <div class="medio">
		<?php 
                    if(isset($_GET['opc'])){
			$i=$_GET['opc'];
			if (!is_numeric($i)){
														
                            switch ($i) {																										
                            case 'nuevo'; include ('Registrar_Mecanico.php'); break;
                            case 'buscar': include ('Consultar_Mecanicos.php'); break;
                            case 'noticia': include ('Publicar_Noticias.php'); break;
                            case 'ficha': include ('Ficha_Tecnica_Mecanicos.php'); break;
                            case 'edit': include ('Editar_Mecanico.php'); break;														
                            default; echo 'Por favor haga una nueva selección...'; break;														}} 
                    }else{
//                        echo "<center><h3>Bienvenido ".$n."  ".$ap."  ".$am."  </h3> 
						
						
						
						
//						</center>";
                    }
		?>					
            </div>
		
            <div class="dos"></div>
	</div>
    </body>
</html>
<?php

}else {header('location: ../index.php');}

?>