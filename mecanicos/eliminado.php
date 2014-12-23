  <?php
        $s = $_POST['eli'];
        echo $s;
        $query="DELETE FROM mis_contactos  WHERE id_mis_contactos='$s'";
        mysqli_query($con,$query);
        header("location:Menu.php?llamar=8");
        

        ?>