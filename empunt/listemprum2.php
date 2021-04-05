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


@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .header{
font-size: 16px;
  }
  
  div.table{
max-width: 100%;
min-width:100%;

}
table{

  max-width: 100%;
min-width:100%;

}
}
</style>
</head>
<body>

<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="../gestion materiels/affichageMateriel.php">Materiels</a>
  <a href="../gestion utilisateurs/listeUtilisateur.php">Utilisateurs</a>
  <a href="#">Emprunts</a>


  
  <a href="../controller/deconnection.php">Se deconnecter</a>
</div>

<button class="openbtn" onclick="openNav()"> <span style="margin-right: -100px">☰ MENU</span></button>  
<div class="container ">
    
   <h3 class="h3">Liste des emprunts</h3><a href="./ajouterEmprun.php
" class="liste-btn btn-lg active" role="button" aria-pressed="true" >⊕Ajouter</a>
   

</div>
<br><br>
 <?php
 require("../controller/connexion-bd.php");
 $req="SELECT * from emprunt where rendu=0";
 $resultat=mysqli_query($connexion, $req);

 while ($ligne =mysqli_fetch_assoc($resultat)) {
     echo '<div class="container">';
    echo '<div class"  w-50 ">';
    echo '<table  class="table  table-striped table-hover table-condensed" border style="width100%; font-size:14px>';
    
    echo'<div class="search-container">';
    
    echo '	<thead  > <tr><th id="font">Numero</th> <th id="font">Nom debiteur</th><th id="font">Materiels emprunter</th> ';
    echo '<th id="font">Date d\'ajout</th><th id="font">Date de retour</th><th> Description</th></tr></thead> <tbody>';
    echo '<tr> <td id="color">'.$ligne['id'].
    '</td><td id="color">'
     .$ligne['nom'].'</td><td id="color"> '
    .$ligne['materielEmprunter'].'</td><td id="color"> '
    .$ligne['date ajout'].'</td ><td id="color"> '
    .$ligne['dateRetour'].'</td><td id="color">'
    .$ligne['descript'].'</td><td id="color">

    </tr>' ;
    
    if(date('Y-m-d')>$ligne['dateRetour']){
        echo '
        <tr><td colspan="6"><p style="color:red" align=center> Date de retour depasser </p></td> </tr>';
        }
    echo'
    <tr><td align=center colspan="6"><a href="../controller/listeEmpruntsup.php?id='.$ligne['id'].'" align="rigth"><i class="fa fa-check" style="color:green"aria-hidden="true">rendu</i></a></td></tr> <br><br>';
    echo '</tbody></div> </table> </div> </div>';


        } 



 
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
    #font{
        font-size: 20px;
    }
    #color{
        font-size: 18px;
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