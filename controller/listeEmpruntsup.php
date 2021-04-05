<?php
require("./auth.php");
$id=$_GET['id'];
require("./connexion-bd.php");
$req="UPDATE emprunt SET rendu=1 where id=$id";
$resultat=mysqli_query($connexion, $req);

echo '<h3 style="color: green; font-family:Arial;"> Emprunt rendue avec succes</h3>';

header("Refresh: 1;url= ../empunt/listeEmprunt.php");


?>