<?php
require("./auth.php");
$id=htmlspecialchars($_GET['id']);

//connection base de bonnee
require("./connexion-bd.php");
 $requet1="SELECT images from materiels where id='$id' ";
 $resultat=mysqli_query($connexion,$requet1);
 $ligne=mysqli_fetch_assoc($resultat) ;
 $supImg=$ligne['images'];
 unlink("../gestion materiels/".$supImg);
 $requet2="DELETE FROM materiels WHERE id=$id";
 $resultat2=mysqli_query($connexion,$requet2) ;
 echo '<h3 style="color: red; font-family:Arial;">materiel suprimer avec succes</h3>';

header("Refresh:1;url=../gestion materiels/affichageMateriel.php");
 
 