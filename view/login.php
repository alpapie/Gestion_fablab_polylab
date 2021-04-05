<?php
session_start();
$erreur=null;
if (isset($_POST) && !empty($_POST['identifiant']) && !empty($_POST['password'])) {
    extract($_POST);
   
    require("../controller/connexion-bd.php");
    $identifiant=addslashes($identifiant);
    $identifiant=htmlspecialchars($identifiant);

    $password=addslashes($password);
    $password=htmlspecialchars($password);

    $req="SELECT nom,prenom, motDePasse FROM utilisateur WHERE identifiant='$identifiant'";
    $resultat=mysqli_query($connexion ,$req) ;
    $nombreligne=mysqli_num_rows($resultat);
    $ligne=mysqli_fetch_assoc($resultat);

    if (mysqli_num_rows($resultat)>0 && password_verify($password, $ligne['motDePasse'])) {
        
        
   $_SESSION['auth']=[
       'login'=>$identifiant ,
       'password'=>$password,
       'nom'=>$ligne['nom'],
       'prenom'=>$ligne['prenom']
   ];
  header("location:../gestion materiels/affichageMateriel.php");

    }else {
        $erreur="mauvais identifiant";
    }
}
?>
<html>

<head>
  <link rel="stylesheet" href="./stylelogin.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="/view/path/to/font-awesome/css/font-awesome.min.css">
  <title>S'authentifier</title>
</head>

<body>
  <div class="main" >
        
    <p class="sign" align="center">Se connecter</p>
    
    <form method="post" action="" class="form">
    <?php if ($erreur):?>
                    
                    <label  style="color: red; text-align: center;"> <?=$erreur;?></label>
                    <?php endif ?>
      <input class="un" name="identifiant" type="text" align="center" placeholder="Votre Identifiant" required>
      <input class="pass" name="password" type="password" align="center" placeholder="Votre mot de passe" required>
             <button class="submit" >Se Connecter</button>

                
    </div>
     
</body>

</html>