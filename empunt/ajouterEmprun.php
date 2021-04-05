<?php
require("../controller/auth.php");
if (isset($_POST) && !empty($_POST)) {
  
    $descript=htmlspecialchars(addslashes($_POST['descript']));
    $materielEmprunter=  htmlspecialchars(addslashes($_POST['materielEmprunter']));
    $nom=  htmlspecialchars(addslashes($_POST['nom']));
    $dateRetour=$_POST['dateRetour'];
    require("../controller/connexion-bd.php");
    $req="INSERT into emprunt(nom,materielEmprunter,descript, dateRetour,rendu) values('$nom','$materielEmprunter','$descript','$dateRetour',0)";
    $resultat = mysqli_query($connexion, $req) or die(mysqli_error($connexion));
    header("location:./listeEmprunt.php");
}

?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/style.css">
    <link rel="stylesheet" type="text/css" href="../view/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css">
 
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
    text-align:center ;
  }
  .marge{
    margin-top: 30px;
  }

@media (max-width: 800px) {
  body{
    overflow-x: hidden;
  }
   div.add_show_user{
    display: flex;
    flex-direction: column;
justify-content: space-between;
align-content: center;
margin-bottom: 50px;
margin-top: 30px;
padding: 50px;
  } 
  .show_user{
    margin-top: 50px;
    box-shadow: 1px  1px 10px #DDD;
  }
   
   .form-container{
    margin-top: 0;
margin: auto;
    max-width: 400px;
  margin-bottom: 50px; 
  }
    footer.footer{
  position: relative;
height: 100px;
font-size: 13px;
bottom: 0;
display: flex;
flex-direction: column;
justify-content: center;
}
p#copy{
  text-align: center;
  margin: auto;
}
}

    .add_show_user {
display: flex;
flex-direction: row;
margin-top: 50px;
  }
  .form-container{
margin: auto;
    max-width: 400px;
  margin-bottom: 50px; 
  }
  .user_table{

margin: auto;

  }



a{
  
text-decoration: none;  
}

footer.footer{
  position: relative;
height: 70px;
font-size: 16px;
bottom: 0;
display: flex;
flex-direction: column;
justify-content: center;
}
#copy{
  font-size: 15px;
  letter-spacing: 2PX;
  margin: auto;
 
}
}
</style>

</style>
</head>
<body>

<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="../gestion materiels/affichageMateriel.php">Materiels</a> 
  <a href="../gestion utilisateurs/listeUtilisateur.php">Utilisateurs</a>
  <a href="./listeEmprunt.php">Emprunts</a>


  
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
			<div class="row col-12 col-sm-6 mx-auto ">
            <div class="form_edit shadow rounded ">
            <legend style="color: #dfad49;text-align: center;">Ajouter un emprunt</legend>
            <br><br>
            <form class="row " action=""  method="post" enctype="multipart/form-data">
            <fieldset>	
              

                <div class="md-3" >
                <label class="form-label">  Nom du debiteur </label>
                
                <input type="text" class="form-control "name="nom"  required>
              </div>
              <br>
                <div class="md-3" >
                <label  class="form-label">   Materiel emprunter  </label>
                <input type="text" name="materielEmprunter" required class="form-control" >
              </div>
<br>
                <div class="md-3" >
                <label  class="form-label">Date de retour </label>
              <input class="form-control" type="date" name="dateRetour" value="<?php echo date('Y-m-d');?>" >
              </div>
              <br>
                <div class="md-3" >
              <label  class="form-label" style="text-align: left;"    >Descript</label>
              <textarea name="descript" class="form-control" id="" cols="30" rows="5"></textarea>
              </div>

              
             <br>
              <div class="col-12">
                <button style="background-color: #dfad49; text-align: center;" type="submit" class="btn ">Ajouter</button>
              </div>
         
         </fieldset>
         
         </div>
</form>
</div>
                        
    </div></div><br><br>

    
    <footer class="footer">
        <p >Copyright &copy; Made by Alpix and Alpapie </p>
    </footer>
    
  </body>
</html>
