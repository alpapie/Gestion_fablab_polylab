<?php

require("./auth.php");

if (isset($_POST) && !empty($_POST)) {

$stock= htmlspecialchars(addslashes($_POST['stock']));
$nom = htmlspecialchars(addslashes($_POST['nom']));
$lienDescription =htmlspecialchars(addslashes( $_POST['lienDescription']));
$typpe=$_POST['typpe'];
$name = $_FILES['image']['name'];
$ext = $_FILES['image']['type'];
$size = $_FILES['image']['size'];
$tempN = $_FILES['image']['tmp_name'];

 

$nomimage=uniqid();

$erreur = "erreur lors du transfert";

$nomfich = "../gestion materiels/images/{$nomimage}.png";

//pour ne pas avoir les meme nom dans une base de donne on le renome avec id clee primaire

$resultat = move_uploaded_file($tempN, $nomfich);



require("../controller/connexion-bd.php");



$requet = "INSERT INTO materiels(stock,images, nom, typpe,lienDescription) VALUES ('$stock','$nomfich','$nom','$typpe','$lienDescription')";



$resultat = mysqli_query($connexion, $requet) or die(mysqli_error($connexion));


echo '<h3 style="color: green;"> Ajouter avec succes</h3>';

header("Refresh:1;url=../gestion materiels/affichageMateriel.php");

}

?>