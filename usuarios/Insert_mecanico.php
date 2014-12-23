<?php session_start(); ?>
<?php 
 require("conexion_stark.php");//inicio conexion
				 if(isset ($_GET["varID"])){// recivola varible con el id mecanico
				$IDmeca=$_GET['varID'];//renombramos variable para evitar escrirbi mucho en la consultas
				$cadena="SELECT * FROM mis_contactos WHERE id_meca='$IDmeca' AND id_usuario=' $_SESSION[id_usuario]' "  ; // consulta para verificar que el usuario no lo tengas agregado ateriromente
      $res=mysqli_query($con,$cadena);
      if(mysqli_num_rows($res)>0)//condicion que insertara o mostara mensaje dependiendo de la consulta "cadena"
      {
          echo"<script type=\"text/javascript\">alert('Usuario agregado anteriormente'); window.location='Menu.php?llamar=4';</script>";  // mensaje que mostrara cuando salga el error de agreado mas d euna vece
      }
      else
      {
 $cadena=("INSERT INTO mis_contactos (id_usuario, id_meca) VALUES (' $_SESSION[id_usuario]	', ' $IDmeca ')");// esta consulta inserta el mecanico en tus contactos
  mysqli_query($con,$cadena);
  header('Location:Menu.php?llamar=4'); // redireciona ala pagina mis mecanicos uan ves agregado
				  }
				  }
				  


?>