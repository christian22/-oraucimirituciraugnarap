<?php 
/* VALUES */
$id=$_POST['id'];
$title=$_POST['title'];
$start=$_POST['start'];
 
// connexion à la base de données
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=driveservice', 'root', '');
 } catch(Exception $e) {
 exit('Impossible de se connecter à la base de données.');
 }
 
$sql = "UPDATE evenement SET title=?, start=? WHERE id=?";
$q = $bdd->prepare($sql);
$q->execute(array($title,$start,$end,$id));
 
?>