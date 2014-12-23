<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <link rel="stylesheet"  href="css/Hover_Animation.css" />
        <title>Buscar</title>
<form name="form1" method="post" action="buscador.php" id="cdr">
  <h3>Buscar Cliente</h3>
      <p>
        <input name="busca"  type="text" id="busqueda">
        <input type="submit"  class="push" name="Submit" value="buscar" />
        </p>
      </p>
</form>
  <style type="text/css">
input{outline:none;border:0px;}
#busqueda{background:#585858;color:#fff;}
#cdr{padding:5px;background:#35afe3;width:220px;border-radius:10px 0px 0px 10px;}
#tab{background:#CCC;;border-radius:10px 10px 10px 10px;}
</style>
   
 <?php
$busca="";
$busca=$_POST['busca'];
mysql_connect("localhost","root","");// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
mysql_select_db("driveservice");//nombre de la base de datos
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM usuarios WHERE nombre LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
?>
<table width="1166" border="1" id="tab">
   <tr>
     <td width="19">id</td>
     <td width="61">nombre</td>
     <td width="157">apellidop</td>
     <td width="221">apellidom</td>
     <td width="176">email</td>
     <td width="73">contrasena</td>
     <td width="118">celular</td>
     <td width="103">estado</td>
     <td width="67">municipio</td>
     <td width="107">colonia</td>
     <td width="107">calle</td>
     <td width="107">numero</td>
     <td width="107">cp</td>
   </tr>
 
<?php

while($f=mysql_fetch_array($busqueda)){
echo '<tr>';
echo '<td>'.$f['id'].'</td>';
echo '<td>'.$f['nombre'].'</td>';
echo '<td>'.$f['apellidop'].'</td>';
echo '<td>'.$f['apellidom'].'</td>';
echo '<td>'.$f['email'].'</td>';
echo '<td>'.$f['contrasena'].'</td>';
echo '<td>'.$f['celular'].'</td>';
echo '<td>'.$f['estado'].'</td>';
echo '<td>'.$f['municipio'].'</td>';
echo '<td>'.$f['colonia'].'</td>';
echo '<td>'.$f['calle'].'</td>';
echo '<td>'.$f['numero'].'</td>';
echo '<td>'.$f['cp'].'</td>';
echo '<td>'.'<input type="button" onclick="Borra('.$f['id'].')" value="Borrar cliente">'.'</td>';
echo '</tr>';
//onclick="return confirm('Â¿Realmente deseas eliminar este articulo?')";
//cambiar los nombres de los campos de busqueda
}

}

?>
