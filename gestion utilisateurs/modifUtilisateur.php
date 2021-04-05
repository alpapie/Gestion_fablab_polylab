<?php
require("../controller/auth.php");
?>


<!DOCTYPE html>
<html>
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/bootstrap.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="smartscreen.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">


<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.css"
  rel="stylesheet"
/>
    <link rel="stylesheet" href="../view/style.css">
<style type="text/css">
   .form-container{

width: 600px;
    }

    * {
margin:0;
padding: 0 ; 

    }
    body{
overflow-x:hidden; 


    }

@media (max-width: 500px) {
  body{
    overflow-x: hidden;
  }
   div.add_show_user{
    display: flex;
    flex-direction: column;
justify-content: space-around;
align-content: center;
margin-bottom: 50px;
margin-top: 30px;
padding: 50px;
box-shadow: none;
margin: auto;
  } 
  .show_user{
    margin-top: 50px;
        box-shadow: none;
    
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

#copy{
 
  font-size: 13px;
}



.form-container  {
        box-shadow: none;
  width: 300px;
  background-color:
  margin:auto; 
margin-top: 20px;
margin-left: -20px;
}

.user_table{
box-shadow: none;
margin: auto;

}


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



</style>



    <title>gestion fablab polylab</title>



</head>
  <?php
include("../view/header.php");
include("./sidebar.php");

?>
<main> 
<style type="text/css">
  a#sidepanel-item{text-decoration: none}
</style>

<?php
$id=$_GET['id'];
require("../controller/connexion-bd.php");
$req="SELECT * from utilisateur where id=$id";
$resultat=mysqli_query($connexion, $req);
$ligne=mysqli_fetch_assoc($resultat);


?>

<div class="add_show_user container"> 
        <div style="padding-bottom: 30px" class="  form-container shadow rounded form">

  <form action="../controller/modifUtilisateur.php" class="form col-12" method="post" enctype="multipart/form-data">
  <fieldset >
    <legend style="text-align: left;color: #dfad49; " >modifier l'utilisateur</legend>
    <input type="hidden" name="id" value="<?php echo $ligne['id'];?>" >
    <div class="mb-3">
      <label for="prenom" class="form-label">Prenom</label>
      <input type="text" id="nom" name="prenom" class="form-control" value="<?php echo $ligne['prenom'];?>" placeholder="prenom ">
    </div>

    <div class="mb-3">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" id="nom" name="nom" value="<?php echo $ligne['nom'];?>" class="form-control" placeholder=" nom">
    </div>

    <div class="mb-3">
      <label for="nom" class="form-label">Nom d'utilisateur</label>
      <input type="text" id="nom" name="identifiant" value="<?php echo $ligne['identifiant'];?>" class="form-control" placeholder=" login">
    </div>
    
     <div class="mb-3">
      <label for="tel" class="form-label">Mot de passe</label>
      <input type="password" id="motDepasse" name="password"  class="form-control" placeholder=" ">
    </div>

    <div class="mb-3">
      <label for="tel" class="form-label">Confirmer Mot de passe</label>
      <input type="password" id="confmotDepasse" name="confpassword" class="form-control"  >
      <div style="color: red;" id="alert"></div>
    </div>
        <button style="background-color: #dfad49" type="submit" class="btn mx-auto " id="click">Modifier</button>

  </fieldset>
  </form>

 
      <!-- -----------------------------------------------   -->
 </div>       
     
  <!----------------------------------- -------------------------------------------------   -->

  <div class="col-1"> </div>            
  <script>

  var motdepas =document.getElementById("motDepasse")
  var confmotdepas =document.getElementById("confmotDepasse")
  var click =document.getElementById("click")
  var alert =document.getElementById("alert")
  click.addEventListener('click', function(event){
  if (  motdepas.value!==confmotdepas.value ) {
  event.preventDefault();
  alert.innerHTML="OUPS!! Les mots de passes ne correspondent pas. Veuillez ressayer";
  alert.style.color="red"

  }
  })



  </script> 

  <?php
  require("../controller/connexion-bd.php");
  $sql="SELECT *from utilisateur";
  $resultat=mysqli_query($connexion,$sql);
  ?>
    <style type="text/css">
  div.user{
  padding: 20px;


  }
  @media (max-width: 600px) {
  .main {
  border-radius: 10px;

  }}
  </style>
  <div class="user_table table-responsive   ">
    <table  style=" text-align: center;font-size: 16px; text-align:center ;padding: 20px; " class=" table table-hover table-bordered" data-toggle="table" data-search="true" data-show-columns="true">
    <thead class="thead-light">
      <tr>
        <th data-sortable="true" data-field="num de serie">Prenom</th>
        <th>Nom</th>
        <th data-sortable="true" data-field="nom">identifiant</th>
        <th data-sortable="true" colspan="2" data-field="type"></th>
      </tr>
    </thead>
    <tbody>
    <?php 
    while ($ligne =mysqli_fetch_assoc($resultat)) {
    echo '<tr> <td>'.$ligne['prenom'].
    '</td><td>'
    .$ligne['nom']."</td><td> "
    .$ligne['identifiant']."</td> " ;

    echo '
    <td> <a href="modifutilisateur.php?id='.$ligne['id'].'"><img src="./icone/edit.png" alt=""></a></td> 
    <td> <a href="../controller/supUtilisateur.php?id='.$ligne['id'].'"><img src="./icone/icons8-supprimer-32.png" alt=""></a></td></tr>';
    } 
    echo '</tbody>
    </table>';?> 
  </div>

<!--  class="add_show_user   container          user_table" -->
  </div>
  
 </main>
<footer class="footer">
        <p id="copy" style="text-align: center">Copyright &copy; Made by Alpix and Alpapie </p>
    </footer>
<script>
function openNav() {
document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
document.getElementById("mySidepanel").style.width = "0";
}
</script>
</body>


</html>



