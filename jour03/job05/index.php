<!-- Créez une variable de type string nommée $str et affectez y le texte :
“On n’est pas le meilleur quand on le croit mais quand on le sait”.
Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
“consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
nombre d'occurrences de consonnes et de voyelles de $str.
Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
“Consonnes”.. -->

<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$voyelle = array("a","e","i","o","u","y","A","E","I","O","U","Y");
$spec = array(" ","'",".","!");
$dic = ["voyelles" =>0,'consonnes'=>0];
$contspec =0;
$i = 0;
while(isset($str[$i])) {
    
    foreach($voyelle as $key=>$value) {
      if($str[$i] == $voyelle[$key]) {
   $dic["voyelles"]++;
      }
    }
    foreach($spec as $key=>$value) {
        if($str[$i] == $spec[$key]) {
            $contspec++;
        }
      }

   
    $i++;
   }
 $dic["consonnes"]=$i-($contspec+$dic["voyelles"]);


// // array('voyelles'=>array('a','e','i','o','u','y'),
// // 'consonnes'=>array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z'));
//  $ctv=0;
//  $ctc=0;
// //  foreach($dic as $k => $v) {
// //   $ctv++;
// // }
// // $i = 0;
// // while(isset($str[$i])) {
// //     $i++;
// //     $ct++;
// //   }

// //  echo $ct;
// foreach($dic as $key => $value) {
//     var_dump($key);
//     var_dump($value);


//     for($i = 0; $i < strlen($str); $i++) {
//         // var_dump($str[$i]);
//         // var_dump($value);
//     if($str[$i] == $dic['consonnes'][$key]){
//         $ctc++;
//         }
//     }


// }
// var_dump($ctc)
// //boucle sur l'ensemble des caractères
// //  for($i=0;isset($str[$i]);$i++) {
// //     if(isset($dic['consonnes'][$i]) && $str[$i] === $dic['consonnes'][$i]) {
// //         $ctc++;
// //         var_dump($ctc);
// //     }
// //     if(isset($dic['consonnes'][$i])) {
// //         var_dump($dic['consonnes'][$i]);
// //         var_dump($i);
// //         if($dic['consonnes'][$i] === $str[$i]) {
// //             var_dump($dic['consonnes'][$i]);

// //         var_dump($str[$i]);
// //     }
// // }
//     //boucle sur l'ensemble des voyelles
// //     for($u=0; isset($dic['voyelles'][$u]); $u++){
// // // on vérfie que le caractère "selectionné" est une voyelle 
// // if($str[$i] == $dic['voyelles'][$u]){
// //     var_dump($dic['voyelles'][$u]);
// //     //ctv + 1
// //     $ctv++;
// //     var_dump($ctv);
// //     //sinon ctc +1 
// //     }else {
// //         $ctc++;
// //     } 
// // }
// // }
//     // $char = $str[$i];
// //     var_dump($ctv);

?>



<table>
<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>
<tbody><tr><td><?= $dic["voyelles"] ?></td><td><?= $dic["consonnes"] ?></td></tr></tbody>
</table>
