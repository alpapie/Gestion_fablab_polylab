<?php
require("./auth.php");
if (isset($_POST) && !empty($_POST) ){
    
    extract($_POST);
    if ($password==$confpassword && !empty($prenom)
     && !empty($nom) 
    && !empty($identifiant) 
    && !empty($password)) {
        $nom=htmlspecialchars(addslashes( $nom));
        $prenom=htmlspecialchars(addslashes($prenom));
        $itendifiant=htmlspecialchars(addslashes($identifiant));
        $password=htmlspecialchars($password);
        $password=password_hash($password, PASSWORD_DEFAULT);
       require("./connexion-bd.php");
       $req="UPDATE utilisateur set nom='$nom',prenom='$prenom',identifiant='$identifiant',motDePasse ='$password' where id=$id";
       $resultat = mysqli_query($connexion, $req) or die(mysqli_error($connexion));

       
echo '<h3 style="color: green; font-family:Arial;">utilisateur modifier avec succes</h3>';

header("Refresh:1;url=../gestion utilisateurs/listeUtilisateur.php");
   
       
    }
}else{
    header("location:../gestion utilisateurs/listeUtilisateur.php");
}

?>
