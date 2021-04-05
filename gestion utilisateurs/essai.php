<?php
require("../controller/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/style.css">
    <link rel="stylesheet" href="../view/css/bootstrap.css">
	  <link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css">

    <link rel="stylesheet" media="screen and (max-width: 600px)" href="smartscreen.css">
    <title>gestion fablab polylab</title>
</head>

<?php
include("../view/header.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.sidepanel  {
  width: 0;
  position: fixed; 
  z-index: 1;
  min-height: 250px;
  
  background-color: #444;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidepanel a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #F1F1F1;
  display: block;
  transition: 0.3s;
}

.sidepanel a:hover {
  color: #dfbf70;
}

.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}

.openbtn {
  position:fixed;
  z-index: 1;
  font-size: 20px;
  cursor: pointer;
  background-color: #444;
  color: white;
  padding: 10px 15px;
  border: none;
  margin-left: 10px;
  margin-top: 20px;
  border-radius: 10px;
transition: all .2s;
left: -100px;
width: 200px;
  transition: 0.3s;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

.openbtn:hover {
  background-color:#dfbf70;
  left: -10px;

}
</style>
</head>
<body>

<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="../gestion materiels/affichageMateriel.php">Materiels</a>
  <a href="../gestion utilisateurs/listeUtilisateur.php">Utilisateurs</a>
  <a href="#">Emprunts</a>


  
  <a href="deconnection.php">Se deconnecter</a>
</div>

<button class="openbtn" onclick="openNav()"> <span style="margin-right: -100px">☰ MENU</span></button>  
<div class="container ">
    
    <h1 class="liste-emprunt" > Liste des emprunts </h1><a href="./ajouterEmprun.php
" class="liste-btn btn-lg active" role="button" aria-pressed="true" >⊕Ajouter</a>
   

</div>
<br><br>
<style>
</style>
 <?php
 require("../controller/connexion-bd.php");
 $req="SELECT * from emprunt where rendu=0";
 $resultat=mysqli_query($connexion, $req);
 echo'<div class="container"> <table class="table table-border"><thead> <tr>
 <th scope="col">numero</th>
 <th scope="col">Nom debiteur</th>
 <th scope="col">Materiel emprunter</th>
 <th scope="col">Date emprunt</th>
 <th scope="col">Date de retours</th>

 </tr>
 </thead>';

 while ($ligne =mysqli_fetch_assoc($resultat)) {
   

  echo'
    <tr>
  <td>
      '.$ligne['id'].'</td>';

  echo '
      <td>'.$ligne['nom'].' </td>';

    echo'
    <td>'.$ligne['materielEmprunter'].' </td>
    ';

  echo '<td>';
    if(date('Y-m-d H:i:s')>$ligne['date retour']){
      echo'
           <br>'.$ligne['date retour'].' 
         style="color:red"> Date de retour depasser  
        </td>';
        
    }else{
    echo'
    <td>
    <p>'.$ligne['date retour'].' 
    </td>';
 }
  echo'
  <td>
    <p>'.$ligne['description'].' 
    </td>';

  echo'
  <td>
  <div class="row col-2 ">
   <a href="../contdoller/listeEmpruntsup.php?id='.$ligne['id'].'" align="rigth"><img src="./historique de doc/icons8-supprimer-32.png" alt=""></a>
   </tr>
';
 }
echo '  </table>
</div><br><br>' 
 ?>

  



<footer class="footer">
        <p style="font-size:20px">Copyright &copy; Made by Alpix and Alpapie </p>
    </footer>
    <script type="text/jascript" src="../view/js/bootstrap.js"></script>
    <script type="text/jascript" src="../view/js/jquery-3.4.1.min.js"></script>
</body>
</html>
<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
   
</body>


<style>
    a{
        text-decoration: none;
    }
    a:hover{
        
        text-decoration: none;}
    .liste-emprunt{
       
        text-transform: uppercase;
        font-size: 40px;
        background-color: #dfbe50;
        text-align: center;
        border: bold black 15px;
        border-radius: 4px;
    }
    .liste-btn{
      background-color: #dfbe50;
        text-align: center;
        border: bold black 15px;
        border-radius: 4px;
        text-decoration: none;
        color: #fff;
    }
</style>