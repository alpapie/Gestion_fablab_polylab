<?php
require("./auth.php");
if (isset($_POST) && !empty($_POST)){
  extract($_POST);
   if ($password==$confpassword && !empty($prenom)
  && !empty($nom) 
 && !empty($identifiant) 
 && !empty($password))  {
    // $nom=htmlspecialchars($nom);
    // $prenom=htmlspecialchars($prenom);
    // $identifiant=htmlspecialchars($identifiant);
    // $password=htmlspecialchars($password);
    $nom=htmlspecialchars(addslashes( $nom));
    $prenom=htmlspecialchars(addslashes($prenom));
    $itendifiant=htmlspecialchars(addslashes($identifiant));
    $password=htmlspecialchars($password);
    $password=password_hash($password, PASSWORD_DEFAULT);
    require("../controller/connexion-bd.php");
    $req="INSERT INTO utilisateur(nom,prenom,identifiant,motDePasse) VALUES ('$nom','$prenom','$identifiant','$password')";
    $resultat=mysqli_query($connexion, $req);

    echo '<h3 style="color: green;"> Utilisateur Ajouter avec succes</h3>';

header("Refresh: 1;url=../gestion utilisateurs/listeUtilisateur.php");
   
  }else{
 
    header("location:../gestion utilisateurs/listeUtilisateur.php");
  }

  }



?>
