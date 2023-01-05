<!-- Job 07

Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui affiche, à la validation du formulaire,
une maison telle que :
Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
maison qui s’affiche sur la page doit ressembler à ceci :

Si on entre les valeurs largeur = 20 et hauteur = 10 dans les champs,
la maison qui s’affiche sur la page doit ressembler à ceci : -->


<form action="" method ="GET" id = "form" name = "form">
largeur<input type =text   name = "largeur" id = "largeur" value="0"autofocus>
hauteur<input type =text   name = "hauteur" id = "hauteur"value="0">
<button type="submit">Valider</button>
</form>  
<?php



//   $_GET['largeur']=$_GET['hauteur']=10;
/*
$i=0;
$j=0;
while ($i <= $_GET['hauteur']) {
    $j = 1;
    while ($j <= $_GET['largeur'] - $i) {
      ?> 
      &nbsp;
    <?php   $j++;
    }
    
    $k = 1;
    while ($k <= 2 * $i - 1) {
        
      if ($k == 1 || $k ==2 * $i ) {
        
        echo "/ ";
        
      }  elseif($k == 1 || $k ==2 * $i -1){
        echo "\ ";
      }
       
      else {
        echo " _ ";
      }
      $k++;
    } 
      ?> 
      <br />
    <?php 
    $i++;
  }
*/
// $_GET['hauteur'] = 5;
// $_GET['largeur'] = 7;

// for ($i = 1; $i <= $_GET['hauteur']; $i++) {
//     // Output the spaces before the asterisks
//     for ($j = 1; $j <= $_GET['largeur'] - $i; $j++) {
//         echo "&nbsp ";
//     }

//     for ($j = 1; $j <= $i * 2 - 1; $j++) {
//         echo "*";
//     }
//     echo "<br />";
// }
 
// if ($_GET['largeur']=null&&$_GET['hauteur']=null  ){
//     echo "entrer une valeur pour la hauteur et la largeur";
   
// }
// else {
    // while($_GET['largeur']=null&&$_GET['hauteur']=null){
    //     var_dump($_GET['largeur']);
  /*  $i=0;

for ($i = 1; $i <= $_GET['hauteur']; $i++) {
     for ($j = 1; $j <=$_GET['largeur']; $j++) {
  echo "*";
    }
    echo "<br />";
    }

*/
// }
// $hauteur =5;

// $largeur = 10;




if(isset($_GET['hauteur']) && isset($_GET['largeur'])){


    $hauteur = $_GET['hauteur'];
    $largeur = $_GET['largeur'];

for ($i = 1; $i <= $hauteur; $i++) {
    // Output the spaces before the characters
    for ($j = 1; $j <=$hauteur - $i; $j++) {
        echo "&nbsp ";
    }
    // Output the left border
    echo "/";
    // Output the spaces between the border and the asterisks
    for ($j = 1; $j <= $i * 2 - 3; $j++) {
        echo "- ";
    }
    // Output the right border
    echo "\\";
    echo "<br />";
}

for ($i = 1; $i <= $hauteur; $i++) {
   
    echo "|";
   
    for ($j = 1; $j <=$largeur - 2; $j++) {
        echo "- ";
    }
    //right border
    echo "|";
    echo "<br />";
}

}
?>







