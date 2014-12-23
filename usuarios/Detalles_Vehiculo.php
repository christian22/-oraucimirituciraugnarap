<?php @session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <title>Ficha Tecnica vehiculo</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/sDetalles_Vehiculo.css"/> 
        <link rel="stylesheet" href="css/sMis_Vehiculos.css" type="text/css"/>
    </head>
    <body>
    <?php 
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
        include ("conexion_stark.php");
    ?>
    <div id="caja">  
        <div id="contenedor">
        <h2>Ficha Tenica vehiculo</h2>
        <?php

        $idcon=$_GET["ver"];


        $cadena= "SELECT * FROM vehiculos WHERE id_vehiculo = $idcon";

        $result= mysqli_query($con,$cadena);
        while($reg=mysqli_fetch_array($result)){
                $id=$reg["id_vehiculo"];
                $modelo=$reg["modelo"];
                $marca=$reg["marca"];
                $tipo=$reg["anio"];
                $kilometraje=$reg["kilometraje"];
                $smotor=$reg["smotor"];
                $cilindraje=$reg["cilindraje"];
                $clave_vehicular=$reg["clave_vehicular"];
                $transmison=$reg["transmision"];
                $rotacion=$reg["rotacion"];
        }
        ?>

        <form method="post" action="Menu.php?llamar=15">
<ul1>
<li1 class="izquierda">
  <div>
      <input type="hidden" id="ids" name="idve" value="<?php echo $id; ?>">
    <span class="completo">
        <label for="modelo"> Marca: </label>
        <input type="text" id="modelo" readonly name="modelo" value="<?php echo $modelo;?>"  />
    </span><br>

    <span class="completo">
      <label for="marca"> Modelo: </label>
      <input type="text" id="marca" readonly name="marca" value="<?php echo $marca?>" />
    </span><br>
    
    <span class="completo">
      <label for="tipo"> Tipo: </label>
      <input type="text" id="tipo" readonly name="tipo" value="<?php echo $tipo?>" />
    </span><br>	
	
	 <span class="completo">
          <label for="kilometraje"> Kilometraje: </label>
	  <input id="kilometraje" name="kilometraje" readonly value="<?php echo $kilometraje?>" />
	  
    </span><br>
  </div>

</li1>

<li1 class="derecha">
  <div>
     <span class="completo">
         <label for="smotor">Serie de Motor: </label>
      <input type="text" id="smotor" readonly name="smotor" value="<?php echo $smotor?>" />
    </span><br>
  
    <span class="completo">
      <label for="cilindraje">Cilindraje: </label>
      <input type="text" id="cilindraje" readonly name="cilindraje" value="<?php echo$cilindraje?> "/>
    </span><br>

    <span class="tercio">
      <label for="cp">Clave Vehicular: </label>
      <input type="text" id="cp" readonly name="clave_vehicular" value="<?php echo$clave_vehicular?>"/>
    </span><br>
    
    <span class="dostercios">
      <label for="email">Transmision: </label>
      <input type="text"  id="email" readonly name="transmision" value="<?php echo$transmison ?>" />
    </span><br>
    
    <span class="tercio">
       <label for="rotacion">Rotacion: </label>
       <input type="text" id="telefono" readonly name="rotacion" value="<?php echo$rotacion ?>" />
    </span><br>	  

  </div>

 
</li1>
<li1 class="botones">
 <input type=button onClick="location.href='Menu.php?llamar=1'" value='Atras'><br>
    <input id="editar" name="editar" type="submit" value="Editar " />
	
</li1> 

</ul1>
</form>


</div>
</div>
</body>
</html>