<!DOCTYPE html>

<html>

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link

        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"

        rel="stylesheet">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./view/style.css">

    <link rel="stylesheet" href="./view/css/bootstrap.css">

    <title>gestion fablab polylab</title>

    <!-- Custom styles for this page -->

         

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">



<style>

* {box-sizing: border-box;}





.header {

  background-color: #555;

  padding: 30px;

  text-align: center;

  color:#dfbe50;

  font-size: 20px;

}



#topnav {

  overflow: hidden;

  background-color: #333;

}



#topnav a {

transition: ease-in-out .2s;

  float: left;

  display: block;

  color: #f2f2f2;

  text-align: center;

  padding: 14px 16px;

  text-decoration: none;

  font-size: 17px;

}



#topnav a:hover {

  background-color: #dfbf70;

  color: white;

}



#topnav a.active {

  background-color: #dfbf70;

  color: black;

}



.content {

  padding: 16px;

}



.sticky {

  position: fixed;

  top: 0;

  width: 100%;

}



.sticky + .content {

  padding-top: 60px;

}



button{

background-color: #dfbf70 ; 

  cursor: pointer;

  color: white;

}

    a:hover{

        text-decoration: none;



    }

    div.container{

      margin-top:40px;  

    }

      #title{

       color: #dfbf70;

      }

    .h3{

        color:#dfbf70;

    }

    th{

                color:#dfbf70;

    }

    thead{

                        background-color: #555;



    }

    input[type=search]{

content: recherche;

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



  margin: auto; 

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

color: black;

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



</style>

</head>

<body>

<div class="header">
<img src="./view/EPT FINAL 2c blanc.png" alt="logo" width="100" height="70">
  <h2 ><a id="title" href="">FABLAB POLYLAB</a> </h2>

  <p>GESTION DU MATERIEL <br> <span style="color:white;font-size: 15px">Espace Admin</span></p>

<button type="button" class="btn btn-warning "><a style="color:white" href="./view/login.php">connexion</a></button>

</div>



   

 

</div>   

    <div class="container "> 

        

        <h3 class="h3">Liste des materiaux</h3>                                

        

        <DIV class=" row col-12 col-sm-12 table-responsive ">

    

        <table style="font-size: 16px; text-align:center" class="table " data-toggle="table" data-search="true" data-show-columns="true">

          <thead>

            <tr>

              <th data-sortable="true" data-field="num de serie">stock</th>

               <th>image</th>

               <th data-sortable="true" data-field="type">Nom</th>

               <th data-sortable="true" data-field="nom">types</th>

               

               

               

            </tr>

          </thead>

          <tbody>

          

<?php

require("./controller/connexion-bd.php");

$sql="SELECT *from materiels";

$resultat=mysqli_query($connexion,$sql);





while ($ligne =mysqli_fetch_assoc($resultat)) {

    echo '<tr><td> <a href="'.$ligne['lienDescription'].'" target="_blank"> '.$ligne['stock'].

    '</a> </td><td> <a href="'.$ligne['lienDescription'].'" target="_blank"> <img src="./gestion materiels/'.$ligne['images'].'" alt="afichage img" width="130" height="90"> </a></td><td><a href="'.$ligne['lienDescription'].'" target="_blank"> '

     .$ligne['nom'].'</a></td><td> <a href="'.$ligne['lienDescription'].'" target="_blank">'

     .$ligne['typpe'].' </a></td><tr>';

    } ?>





</tbody>

        </table>

      </div>

    </div>

  </div>

                </div>

   <footer class="footer">

        <p style="font-size:20px">Copyright &copy; Made by Alpix and Alpapie </p>

    </footer>







<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>

</body>

</html>

