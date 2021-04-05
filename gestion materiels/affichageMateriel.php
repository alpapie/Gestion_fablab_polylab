<?php

require("../controller/auth.php");

?>





<!DOCTYPE html>

<html>

<head>

<link rel="icon" href="http://fablab-ept.net/wp-content/uploads/2017/03/cropped-fablabept-32x32.jpg" sizes="32x32" />

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../view/style.css">

    <title>gestion fablab polylab</title>

<!-- Font Awesome -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  

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

</head>

<body>

<style>

* {box-sizing: border-box;}



body{

  position: relative;

}

.header {

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





    .container{

margin-top: 50px;



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

  background-color:;

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

</style>



<div class="header">

  <h2 ><a id="title" href="">FABLAB POLYLAB</a> </h2>

  <p>GESTION DU MATERIEL <br> <span style="color:white;font-size: 15px">Espace Admin</span></p>



</div>



   

 

<?php

require("../controller/connexion-bd.php");

$sql="SELECT *from materiels";

$resultat=mysqli_query($connexion,$sql);

include('./sidebar.php');

?>



</div>   

    <div class="container "> 

        <style type="text/css">

          div.container{

            margin-top: 100px;

          }

          .search-container button:hover {

  background: #dfbf70;

}

.search-container {

  float: right;

}



button{

background-color: #ddd; 

 border: none;

  cursor: pointer;

}



.search-container {

  float: right;



  

display: inline;

float: row;



  font-size: 17px;

  border: none;

  cursor: pointer;

}





          @media screen and (max-width: 600px) {

  .search-container {

   

    float: none;

  }



.h3{

  font-size: 25px;

  

}



  table{

font-size: 14px !important; 



  }

  .search-container button {

    float: none;

    display: inline;

    text-align: left;

    width: 100%;

    margin: 0;

    padding: 14px;

    margin-right : 0;

  }

.bouton{

    margin: 0;

    

  margin-left: : 16px;

}

  div.accessoire{

    display: flex;

    flex-direction: row;

    justify-content: space-between;

    

}



.table-responsive{

  border:0;

}

      }

  



  .h3{



    font-size: 30px;

  }





  a{

  

  text-decoration: none;  

  color: black;

  }



      </style>

        <h3 class="h3" >Liste des materiaux</h3> <br><br>

                                    

        <div class="accessoire mx-auto row col-12">



             <div class="bouton row col-3 col-sm-2"> 

                  <button class="btn btn-success"><a href="ajoutMateriels.php "  role="button" aria-pressed="true" align="left" style=" text-align:left; text-align:center;color: white; font-size: 12px ">+ Ajouter</a>

                  </button>

             </div> 

             <div  class="col-3 col-sm-7" >   </div>        

               <div  align="left" class=" row col-6 col-sm-3 search-container">  

                     <input type="text" name="search" placeholder="recherche.." id="search" class="form-control" />  

              <br>  

              </div>

        </div>   

      

     



    
<div class="container">
       <DIV class="table-responsive ">

                      <div class="col-sm-12 col-12"> 



              

                     <table class="table  table-hover table-bordered" id="employee_table" style="font-size: 16px; text-align:center"   data-toggle="table" data-search="true" data-show-columns="true">

           

                     <thead >

            <tr >

              <th data-sortable="true"  style="  cursor: pointer" data-field="code">stock<i class="fa fa-caret-down" aria-hidden="true"></i></th>

               <th>image</th>

                <th data-sortable="true" style="  cursor: pointer" data-field="type">Nom <i class="fa fa-caret-down" aria-hidden="true"></i></th>

               <th data-sortable="true" style="  cursor: pointer" data-field="nom" >types <i class="fa fa-caret-down" aria-hidden="true"></i></th>

              

                <th style="  cursor: pointer" >Date d'ajout <i class="fa fa-caret-down" aria-hidden="true"></i></th>

                 <th colspan="2">Action</th>

               

               

            </tr>

          </thead>

          <tbody>

<?php 

while ($ligne =mysqli_fetch_assoc($resultat)) {



  echo '<tr id="recherchert"><td> <a href="'.$ligne['lienDescription'].'" target="_blank"> '.$ligne['stock'].

  '</a> </td><td> <a href="'.$ligne['lienDescription'].'" target="_blank"> <img src="./'.$ligne['images'].'" alt="afichage img" width="130" height="90"> </a></td><td><a href="'.$ligne['lienDescription'].'" target="_blank"> '

   .$ligne['nom'].'</a></td><td> <a href="'.$ligne['lienDescription'].'" target="_blank">'

   .$ligne['typpe'].' </a></td><td><a href="'.$ligne['lienDescription'].'" target="_blank"> '

   .$ligne['date ajout'].'</a></td>';

    

    echo '

    <td> <a href="modifMateriel.php?id='.$ligne['id'].'"><img src="./icone/edit.png" alt=""></a></td> 

    <td  onClick="return confirm(\'Voulez vous suprimer ce materiel??\')"> <a href="../controller/supMateriel.php?id='.$ligne['id'].'"><img src="./icone/icons8-supprimer-32.png" alt=""></a></td></tr>';

    } 

    echo '</tbody></table></div></div>';





?>





</tbody>

        </table>

      </div>

    </div>

  </div>

                      </div>

                </div>



                </style>

<script>

    const compare = (ids, asc) => (row1, row2) => {

  const tdValue = (row, ids) => row.children[ids].textContent;

  const tri = (v1, v2) => v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2);

  return tri(tdValue(asc ? row1 : row2, ids), tdValue(asc ? row2 : row1, ids));

};



const tbody = document.querySelector('tbody');

const thx = document.querySelectorAll('th');

const trxb = tbody.querySelectorAll('tr');

thx.forEach(th => th.addEventListener('click', () => {

  let classe = Array.from(trxb).sort(compare(Array.from(thx).indexOf(th), this.asc = !this.asc));

  classe.forEach(tr => tbody.appendChild(tr));

}));



      $(document).ready(function(){  

           $('#search').keyup(function(){  

                search_table($(this).val());  

           });  

           function search_table(value){  

                $('#employee_table #recherchert').each(function(){  

                     var found = 'false';  

                     $(this).each(function(){  

                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  

                          {  

                               found = 'true';  

                          }  

                     });  

                     if(found == 'true')  

                     {  

                          $(this).show();  

                     }  

                     else  

                     {  

                          $(this).hide();  

                     }  

                });  

           }  

      });  

 

</script>

                <!-- JQuery -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Bootstrap tooltips -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<!-- MDB -->

<script

  type="text/javascript"

  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.js"

></script>

<footer class="footer">

        <p id="copy">Copyright &copy; Made by Alpix and Alpapie </p>

    </footer>

</body>

</html>

