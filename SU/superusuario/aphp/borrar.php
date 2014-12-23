


<?php

	if(isset($_REQUEST["b2"])){
	
	
	
	?>
	
            

	<?php
	
	
		$x=$_REQUEST["vbfn"];

	
include("conexion.php");
$query="update mecanicos set status='0' where id_meca=$x";
mysqli_query($con,$query);
mysqli_close($con);
?>

<script languaje="javascript">
  
  location.href = "Menu.php?opc=buscar";
 </script>



<?php 
}
?>
