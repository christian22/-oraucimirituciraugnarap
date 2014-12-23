<?php  @session_start() ?>
<?php
require 'conexion.php';

 if(isset($_REQUEST['publicar'])){
 $comment=$_REQUEST['comment'];
 $foto=$_REQUEST['files'];
 $publ="INSERT INTO ofertas (oferta,img,id_meca)"."VALUES('$comment','$foto',$_SESSION[id_meca])";
 mysqli_query($con,$publ);
  }

?>

<script>
alert("se ha publicado tu oferta");
location.href="Menu.php?llamar=9";
</script>