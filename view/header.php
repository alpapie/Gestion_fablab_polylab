<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">

<style>
* {box-sizing: border-box;}
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');


.header {
    position: relative;

  background-color: #555;
  padding: 30px;
  text-align: center;
  color:#dfbe50;
  font-size: 20px;
}

a#title{
color:#dfbf70;
cursor: pointer;
text-decoration: none;
}
a#title::after{
position:   absolute;
content: "";
width: 50px
;
height: 1px;
background-color: white;
display: block;
left: 40%;
}
a#title:hover::after{
width: 100%
;
height: 2px;
background-color: white;
left: 0px;
transition: width ease-in-out .2s;
}
button{
background-color: #ddd; 
 border: none;
  cursor: pointer;
}
.topnav .search-container button:hover {
  background: #dfbf70;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  body{
    font-size: 12px;
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
<div class="header">
  <img src="./logofablab.jpeg" alt="logo" width="50" height="70">
  <h2><a id="title" href="../gestion materiels/affichageMateriel.php">FABLAB POLYLAB</a> </h2>
  <p style="color: #dfbf70" >GESTION DU MATERIEL <br> <span style="color:white;font-size: 15px">Espace Admin</span></p>

</div>


  </div>
   
 
</div>
</body>


</html>
