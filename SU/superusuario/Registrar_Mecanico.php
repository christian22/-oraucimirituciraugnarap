<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Super Usuario</title>
        <link rel="stylesheet" href="css/sRegistro_mecanico.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 		   
        <script type="text/javascript" src="JS/mapita.js"></script>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-1749329-1']);
            _gaq.push(['_trackPageview']);

            (function() {
              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <script type="text/javascript">
            function boton (obj){
                if(obj.value=='Buscar Taller'){
                    document.getElementById('Guardar').disabled="false";
                }
                if(obj.value=='Guardar'){
                    document.getElementById('Guardars' ).disabled="true";
                }
            }	  
	</script>  
    </head>
    <body>
        <!--aqui comuenza elformulario-->
        <div class="contenedor">
            <div class="titulo">
                <h1>Alta nuevo mecanico</h1>
            </div>
            <form method="post" id="google" name="google" action="#">
                <div class="datosPersonales">      
                    <h3 >Datos personales:</h3>
                    <label1>Nombre(s):</label1>
                        <input title="Se requiere Nombre" type="text" name="nombre" maxlength="24"  value="" required/>
                    <label2>Apellido Paterno:</label2>
                        <input type="text" name="apellidop"  value="" maxlength="20" required />
                     <label3>Apellido Materno:</label3>
                        <input type="text" name="apellidom"   value="" maxlength="20" required />
                    <label4>Tel.Celular:</label4>
                        <input type="text" name="cel"  class="txtNumbers" value="" maxlength="15" required />
                    <label5>Correo electronico:</label5>
                        <input type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" name="email" value="" required/>           
                </div>       
    
                <!--&&&&&&&&&&&&&&&&&&&&&&&& datos del taller &&&&&&&&&&&&&&&&&&&&&&&&-->   
                <div class="datosTaller">
                    <h3>Datos del taller:</h3>  
                    <label1>Nombre:</label1>
                        <input type="text" name="empresa"   value="" maxlength="30"required />
                    <label2>RFC:</label2>
                        <input type="text" name="rfc"  value="" maxlength="20" required />
                    <label3>Calle y numero:</label3>
                        <input type="text" name="calle"  id ="ca" value="" maxlength="59" required />
                    <label4>Colonia:</label4>
                        <input type="text" name="colonia" id="co"  value="" maxlength="40" required/>
                    <label5>Municipio:</label5>
                        <input type="text" name="municipio"   id="mu" value="" maxlength="40" required/>
                    <label6>Estado:</label6>
                        <input type="text" name="estado" id="es"  value="" maxlength="40" required/>
                        <input type="hidden" readonly name="lat" id="lat"/>
                        <input type="hidden" readonly name="lng" id="long"/>
                    <label7>Codigo Postal: </label7>
                        <input type="text" name="cp" class="txtNumbers"  value="" maxlength="7" required/>
                    <label8>Tel.Trabajo:</label8>
                        <input type="text" name="telefono"  class="txtNumbers"  value="" maxlength="12" required/>
                </div>  
                <button id="pasar" value ="Buscar Taller" name="Buscar Taller" onclick="boton(this)" >Buscar taller</button> 
                <input type="submit" name="Guardar"   value="Guardar">
                <input type="button" onclick=" location.href='Menu.php'" value="Volver" name="Volver"/> 
            </form>  
            <?php 
                require("aphp/Alta_meca.php");
            ?>
            <div class="ubicacion">
                <h1>Ubicacion del taller:</h1>
            </div>
            <div id="mapa"></div>
        </div>            
    </body>
</html>