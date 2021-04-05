<?php

require("./auth.php");

$id=$_POST['id'];

$stock = htmlspecialchars(addslashes($_POST['stock']));

$lienDescription= htmlspecialchars(addslashes($_POST['lienDescription']));

$nom =htmlspecialchars(addslashes( $_POST['nom']));

$typpe=$_POST['typpe'];

$name = $_FILES['image']['name'];

$ext = $_FILES['image']['type'];

$size = $_FILES['image']['size'];

$tempN = $_FILES['image']['tmp_name'];

require("./connexion-bd.php");



$erreur = "erreur lors du transfert";

$requet1="SELECT images from materiels where id='$id' ";

 $resultat=mysqli_query($connexion,$requet1);

 $ligne=mysqli_fetch_assoc($resultat) ;

 $nomfich=$ligne['images'];

 $nomfich="../gestion materiels/{$nomfich}";

//pour ne pas avoir les meme nom dans une base de donne on le renome avec id clee primaire



$resultat = move_uploaded_file($tempN, $nomfich);



$requet = "UPDATE materiels SET

 stock='$stock',

 lienDescription='$lienDescription',

 nom='$nom', 

 typpe='$typpe'

 WHERE id=$id";



$resultat = mysqli_query($connexion, $requet) or die(mysqli_error($connexion));

echo '<h3 style="color: green; font-family:Arial;"> Materiel modifier avec succes</h3>';

header("Refresh:1;url=../gestion materiels/affichageMateriel.php");





?>

