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

    

  

<style>

    a{

        text-decoration: none !important ;

    }

    a:hover{

        text-decoration: none !important

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

    <link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css">



    <link rel="stylesheet" media="screen and (max-width: 600px)" href="smartscreen.css">

    <title>gestion fablab polylab</title>

</head>



<?php

include("../view/header.php");

include("./sidebar.php");



?>

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



h3{

  margin-top: 50px;

  color: #dfbf70 ;

}

.container-fluid{

  margin-top: 70px;

}







body {

    font-family:Arial, Helvetica, sans-serif;

}



p{

font-size:16px;

line-height:26px;

letter-spacing:0.5px;

color:#484848;

}

 tr{

   cursor: pointer;

 }

/* Popup Open button */ 

.open-button{

    color:#FFF;

    background:#0066CC;

    padding:10px;

    text-decoration:none;

    border:1px solid #0157ad;

    border-radius:3px;

}

 

.open-button:hover{

    background:#01478e;

}

 

.popup {

    position:fixed;

    top:0px;

    left:0px;

    background:rgba(0,0,0,0.75);

    width:100%;

    height:100%;

    display:none;

z-index: 12;

}

/* custom scrollbar */
::-webkit-scrollbar {
  width: 20px;
}

::-webkit-scrollbar-track {
  background-color: transparent;
}

::-webkit-scrollbar-thumb {
  background-color: #d6dee1;
  border-radius: 20px;
  border: 6px solid transparent;
  background-clip: content-box;
}

::-webkit-scrollbar-thumb:hover {
  background-color: #a8bbbf;
}
 

/* Popup inner div */

.popup-content{
    overflow: auto;
    overflow-x: hidden;
    width: 700px;
    min-height:300px;
    max-height:500px;
    margin: 0 auto;

    box-sizing: border-box;

    padding: 40px;

    margin-top: 100px;

    box-shadow: 0px 2px 6px rgba(0,0,0,1);

    border-radius: 3px;

    background: #fff;

    position: relative;

}

 

/* Popup close button */

.close-button {

    width: 25px;

    height: 25px;

    position: absolute;

    top: 10px;

    right: 0px;

    z-index: 15;
    text-decoration:none;

}

 



 

@media screen and (max-width: 720px) {

.popup-content {

    width:90%;

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



<br><br>

<div class="container ">

  <br>

  <h3 class="h3">Liste des emprunts</h3>

  <a style="text-decoration: none" href="./ajouterEmprun.php

    

" class="liste-btn btn-lg active" role="button" aria-pressed="true" > + Ajouter</a>

<br> 

<div  align="left" class=" row col-6 col-sm-3 search-container">  

                     <input type="text" name="search" placeholder="recherche.." id="search" class="form-control" />  

              <br>  

              </div>        

        <DIV class=" row col-12 col-sm-12 table-responsive ">

    

        <table style="font-size: 16px; text-align:center" class="table table-hover"  id="employee_table" data-toggle="table" data-search="true" data-show-columns="true">

          <thead>

            <tr>

              <th data-sortable="true" data-field="num de serie">Nom debiteur <i class="fa fa-caret-down" aria-hidden="true"></i></th>

               <th data-field="materiel emprunter" data-sortable="true" > materiels emprunter <i class="fa fa-caret-down" aria-hidden="true"></i></th>

               <th data-sortable="true" > Date de Retour <i class="fa fa-caret-down" aria-hidden="true"></i></th>

               <th>Statut <i class="fa fa-caret-down" aria-hidden="true"></i></th>

               

               

            </tr>

          </thead>

          <tbody >

 <?php

 require("../controller/connexion-bd.php");

 $req="SELECT * from emprunt order by rendu";

 $resultat=mysqli_query($connexion, $req);



 while ($ligne =mysqli_fetch_assoc($resultat)) {



  echo '<tr id="recherchert">

  <td id="color"  popup-open="popup'.$ligne['id'].'" href="javascript:void(0)">'

   .$ligne['nom'].'</td><td id="color" popup-open="popup'.$ligne['id'].'" href="javascript:void(0)">'

  .$ligne['materielEmprunter'].'</td><td id="color" popup-open="popup'.$ligne['id'].'" href="javascript:void(0)">'

  .$ligne['date ajout'].'</td><td > ';

  if ($ligne['rendu']==1) {

    echo '<h4 style="color:darkgray;font-size: 25px;">Rendue</h4>';

  }elseif($ligne['rendu']==0){

   echo ' <button class="btn btn-success "><a  href="../controller/listeEmpruntsup.php?id='.$ligne['id'].'"><i class="fa fa-check" style="color:white;"aria-hidden="true">Rendre</i></a></button>';

  }

  if(date('Y-m-d')>$ligne['dateRetour'] && $ligne['rendu']==0 ){

    echo '<p style="color:red" align=center> Date de retour depasser </p>';

    } 

echo '</td> </tr>';



  echo '

  <div class="popup" popup-name="popup'.$ligne['id'].'">

  <div class="popup-content">

  le debiteur:<b>'.$ligne['nom'].'</b><br>

  a emprunter un(e)<b> '.$ligne['materielEmprunter'].'</b><br>

   le <b>'.$ligne['date ajout'].'</b> <br>Date de retour prévus<b> '.$ligne['dateRetour'].'</b><br>

    <b>NB:</b>'.$ligne['descript'].' 

       
<a class="close-button" style="text-decoration:none" popup-close="popup'.$ligne['id'].'" href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>
</a>

  </div>

</div>';

    

    // if(date('Y-m-d')>$ligne['dateRetour']){

    //     echo '

    //     <tr><td colspan="6"><p style="color:red" align=center> Date de retour depasser </p></td> </tr>';

    //     }

    // echo'

    // <tr><td align=center colspan="6"><button class="btn btn-success "><a style="font-family:cursive" id="rendu" href="../controller/listeEmpruntsup.php?id='.$ligne['id'].'" align="rigth"><i class="fa fa-check" style="color:white;"aria-hidden="true">rendu</i></a></button></td></tr> <br>';

    // echo '</tbody></div> </table> </div> </div>';







        } 



 echo '</tbody></div> </table> </div> </div>';



 

 ?>



 

<style type="text/css">

  a#rendu{

    color: white;

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

color: #dfbf70;
}



#copy{

 
color: #dfbf70;
  font-size: 13px;

}



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



th{

                color:#dfbf70;

    }

    thead{

                        background-color: #555;



    }

    input[type=search]{

content: recherche;

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





</div>

<footer class="footer">

        <p style="color: #dfbf70;" id="copy">Copyright &copy; Made by Alpix and Alpapie </p>

    </footer>

    <script type="text/jascript" src="../view/js/bootstrap.js"></script>

    <script type="text/jascript" src="../view/js/jquery-3.4.1.min.js"></script>

</body>

</html>

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



     

</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

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

    $(function() {

        // Open Popup

        $('[popup-open]').on('click', function() {

            var popup_name = $(this).attr('popup-open');

     $('[popup-name="' + popup_name + '"]').fadeIn(300);

        });

     

        // Close Popup

        $('[popup-close]').on('click', function() {

     var popup_name = $(this).attr('popup-close');

     $('[popup-name="' + popup_name + '"]').fadeOut(300);

        });

     

        // Close Popup When Click Outside

        $('.popup').on('click', function() {

     var popup_name = $(this).find('[popup-close]').attr('popup-close');

     $('[popup-name="' + popup_name + '"]').fadeOut(300);

        }).children().click(function() {

     return false;

        });

     

    });

</script>

</body>

