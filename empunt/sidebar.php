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
<style type="text/css">
  a#sidepanel-item{text-decoration: none}</style>
<div  id="mySidepanel" class="sidepanel">
  <a id="sidepanel-item" href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a id="sidepanel-item" href="../gestion materiels/affichageMateriel.php">Materiels</a>
  <a id="sidepanel-item" href="../gestion utilisateurs/listeUtilisateur.php">Utilisateurs</a>
  <a id="sidepanel-item" href="../empunt/listeEmprunt.php">Emprunts</a>  
  <a id="sidepanel-item" href="../controller/deconnection.php">Se deconnecter</a>
</div>

<button class="openbtn" onclick="openNav()"> <span style="margin-right: -100px">☰ MENU</span></button>  
</div>


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
