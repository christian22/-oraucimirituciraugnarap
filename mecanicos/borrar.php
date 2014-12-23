<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
$idcont=$_GET["idcont"];
include("conexion.php");
$query="update contactos set status=0 where id=$idcont";
mysqli_query($conn,$query);
mysqli_close($conn);
?>

<form name="form1" action="index.php" method="post">
<table width="400" border="0" align="center">
  <tbody>
    <tr>
      <td style="text-align:center; font-family:Arial, Tahoma">Registro Eliminado</td>
    </tr>
    <tr>
      <td >&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align:center"><input type="submit" value="Aceptar"></td>
    </tr>
  </tbody>
</table>

</form>

</body>
</html>