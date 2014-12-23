<?php

include("conexion.php");

$estado = $_GET['nom_estado'];

$consulta = mysqli_query($con,"select id,nombre from municipios where nom_estado='$estado' order by nombre ASC");
echo "<select name='municipio' id='municipio'>";
while ($fila = mysqli_fetch_array($consulta)) {
    echo "<option >" . utf8_encode($fila["nombre"]) . "</option>";
    $municipio =$fila["nombre"];
}
echo "</select>";
?>