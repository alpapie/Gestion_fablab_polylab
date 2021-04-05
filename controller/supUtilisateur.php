<?php
require("./auth.php");
$id=$_GET['id'];
//connection base de bonnee
require("./connexion-bd.php");
 $requet2="DELETE FROM utilisateur WHERE id=$id";
 $resultat2=mysqli_query($connexion,$requet2) ;

 echo '<h3 style="color: red; font-family:Arial;">utilisateur suprimer avec succes</h3>'

 header("Refresh: 3;url=../gestion utilisateurs/listeUtilisateur.php");
 