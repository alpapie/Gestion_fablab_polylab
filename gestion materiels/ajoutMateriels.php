<?php
require("../controller/auth.php");
?>
  <html lang="en">
<head>
  <link rel="icon" href="http://fablab-ept.net/wp-content/uploads/2017/03/cropped-fablabept-32x32.jpg" sizes="32x32" />
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
  div.input-hidden{
  display:flex;
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
.hidden{
display: none;
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
      <div class="row col-12 col-sm-6 mx-auto ">
            <div class="form_edit shadow rounded ">
            <legend style="color: #dfad49;text-align: center;">Ajouter un materiel</legend>
            <form class="row " action="../controller/ajoutMateriel.php"  method="post" enctype="multipart/form-data">
            <fieldset>	
            
                <div class="md-3" >
                <label class="form-label">  stock </label>
                
                <input type="number" class="form-control "name="stock" required>
              </div>
                <div class="md-3" >
                <label  class="form-label">    Nom du materiel  </label>
                <input type="text" name="nom" required class="form-control" required><br>
              </div>
              <input type="hidden" name="MAX_FILE_SIZE" value="20000000" >
                                            
                <!-- <div class="md-3" >
                   <label  class="form-label"> Uploader une image </label>
                          <input type="file" class="form-control" name="image"  ><br>
                          
                          </div>  -->
               <div class="md-3 hidden" id="input_photo" >
                   <label  class="form-label"> Ouvrir l'appareil photo </label>
                   <input id="myFileInput" class="form-control" name="image" type="file" accept="image/*" capture="camera" required> <br>
                   <script type="text/javascript">
                         var myInput = document.getElementById('myFileInput');
                      function sendPic() {
                          var file = myInput.files[0];
                      }
                      myInput.addEventListener('change', sendPic, false);
                      </script> 
               </div>              
                                  <button class="btn btn-info col-6 photo"  id="btn-photo" >Prendre une photo <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
  <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
</svg> </button>        
<script type="text/javascript">
  var btn_photo=document.querySelector('#btn-photo');
  var input_photo=document.querySelector('#input_photo');
  btn_photo.addEventListener('click',function(){

btn_photo.classList.add('hidden');
input_photo.classList.remove('hidden');
})
</script>
<br>
<div class="md-3" >
                <label  class="form-label">    Lien Descriptif </label>
                <input type="text" name="lienDescription" required class="form-control" ><br>
              </div>

                <div class="md-3" >
          <label  class="form-label">Selectionner un type </label>

    
<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="typpe" data-style="btn-warning">
  <option value="électronique" >électronique</option>
  <option value="Atelier">Atelier</option>
  <option value="Modelisation 3d">Modelisation 3d</option>
  <option value="Outillage">Outillage</option>
 </select>
 </div>
             <br>
              <div class="col-12">
                <button style="background-color: #dfad49; text-align: center;" type="submit" class="btn "> +Ajouter</button>
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
