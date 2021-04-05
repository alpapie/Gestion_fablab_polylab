<?php
require("../controller/auth.php");
?>
  <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/style.css">
    <link rel="stylesheet" type="text/css" href="../view/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css">
    
    
 

<?php

$id= $_GET['id'];
require("../controller/connexion-bd.php");
$requet="SELECT* FROM materiels where id=$id";
$resultat=mysqli_query($connexion,$requet);
$ligne=mysqli_fetch_assoc($resultat);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?Php include("../view/header.php");
?>
</body>
</html>
<style type="text/css">
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
	div.form_edit{

		margin-top: 30px;
    padding: 20px;
    margin-right: 00px;

	}
  
  .align{
    text-align:left ;
  }

</style>

</style>
</head>
<body>

<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="./affichageMateriel.php">Materiels</a> 
  <a href="../gestion utilisateurs/listeUtilisateur.php">Utilisateurs</a>
  <a href="../empunt/listeEmprunt.php">Emprunts</a>


  
  <a href="../controller/deconnection.php">Se deconnecter</a>
</div>

<button class="openbtn" onclick="openNav()"> <span style="margin-right: -100px">☰ MENU</span></button>  

<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
<div class="  container ">
			<div class="row col-12 col-sm-7 align mx-auto ">
            <div class="form_edit shadow rounded ">
            <form class="row "  action="../controller/modifMateriel.php" method="post" enctype="multipart/form-data">
            <fieldset>	
            <legend style="color: #dfad49;text-align: center;">	Modifier un materiel</legend>
              
              
              <input class="form-control"  type="hidden" name="id" value="<?Php echo $ligne['id']?>" required>
               <div class="mb-3">
                <label class="form-label">stock</label>
                
                <input class="form-control" type="text" class="form-control "name="code" value="<?Php echo $ligne['stock']?>" required>
              </div>
                       <div class="mb-3">
                <label  class="form-label">  Nom du materiel  </label>
                <input class="form-control" type="text" name="nom" value="<?Php echo $ligne['nom']?>" required class="form-control" ><br>
              </div>
              
                           <div class="mb-3">
                              <label  for="type" class="form-label"> Selectionner le type </label>

<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="typpe" data-style="btn-warning">
  <option value="électronique" >électronique</option>
  <option value="Atelier">Atelier</option>
  <option value="Modelisation 3d">Modelisation 3d</option>
  <option value="Outillage">Outillage</option>
 </select>
 </div>
 
                       <div class="mb-3">
                <label  class="form-label">lien Descriptif  </label>
                <input class="form-control" type="text" name="lienDescription" value="<?Php echo $ligne['lienDescription']?>" required class="form-control" ><br>
              </div>
                                            
                           <div class="mb-3">
                                                          <label  for="fichier" class="form-label">  Selectionner un fichier </label>

                          <input type="file" class="form-control"name="image" value="<?Php echo $ligne['images']?>" ><br>
                          
                          </div> 
             
              <div class="btn">
                <button  style="background-color: #dfad49; text-align: center;" type="submit" class="btn ">MODIFIER</button>
              </div>
         
         </fieldset>
         
         </div>
              <input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="20000000">
</form>
</div>
                        
    </div></div><br><br>

    
    <footer class="footer">
        <p style="font-size:20px">Copyright &copy; Made by Alpix and Alpapie </p>
    </footer>
    <script type="text/javascript" src="./js/boostrap/bootstrap.js"></script>
    <script type="text/javascript" src="./js/boostrap/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="./js/jsfichier.js"></script>
</body>
</html>
  
     
    
