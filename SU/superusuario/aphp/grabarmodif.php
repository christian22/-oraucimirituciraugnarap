<?php  session_start();   ?>

<?php 
echo "holiwis";
 if(isset($_REQUEST["btn"])){
						$g=$_REQUEST["idc"];
						if(ctype_digit($g)){
									echo $g ;
						
						
						



include ("conexion.php");
$id=$_POST["idc"];
$nombre=$_POST["nombre"];
	$apellidop=$_POST["apellidop"];
	$apellidom=$_POST["apellidom"];
	$rfc=$_POST["rfc"];
	$taller=$_POST["empresa"];
	$calle=$_POST["calle"];
	$colonia=$_POST["colonia"];
        $cp=$_POST["cp"];
        $telefono=$_POST["telefono"];
        $email=$_POST["email"];
        $contrasena=$_POST["contrasena"];
        $horarioe=$_POST["horarioe"];
        $horarios=$_POST["horarios"];
        
    

$cadena="update mecanicos set nombre='$nombre',apellidop='$apellidop',apellidom='$apellidom',rfc='$rfc',empresa='$taller',calle='$calle',colonia='$colonia',cp='$cp',telefono='$telefono',email='$email',contrasena='$contrasena',horarioe='$horarioe',horarios='$horarios' where id_meca=$id";

$exito=mysqli_query($con,$cadena);
if ($exito){

}
//            else{(echo "es numero";) 
//            }
           }
 }
 
		?>
    
<script language="JavaScript" type="text/javascript">

var pagina="Ficha_Tecnica_Mecanicos.php" 
function redireccionar() 
{
location.href=<pagina></pagina>
} 	
setTimeout ("redireccionar()",1);

</script>
          

