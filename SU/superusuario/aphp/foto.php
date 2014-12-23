
<head>
<script> 
function ponPrefijo(pref){ 
    opener.document.forms[0].elements[2].value = pref 
    window.close() 
} 
</script> 
</head>
<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
require 'conexion.php';
if($_POST) {
$file = $_FILES['archivo']['name'];
$hoy=getdate();
$file=$hoy['yday'].$hoy['mon'].$hoy['mday'].$hoy['hours'].$hoy['minutes'].$hoy['seconds'].".jpg";
$dirfinal = "../images/".$file;

if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
    if( copy($_FILES['archivo']['tmp_name'], $dirfinal))
    {echo "$dirfinal<center><img src=$dirfinal>
           <br><br>Archivo copiado con exito
            
           <form name='form1'>";
           $nombre=$file;
 	echo "   <input type='Button' value='Aceptar' onclick=ponPrefijo('".$nombre."')>" ;
     echo  "          </form>
           </center>";
           die();
     }
   }
}





?>


<center>
    <h3>Subir foto</h3><br><br><form action="foto.php" method="post" enctype="multipart/form-data" name="form1">
Archivo <input name="archivo" type="file" id="archivo"><br /><br>
<input name="button" type="submit" id="button" value='Enviar'>
</form></center>
