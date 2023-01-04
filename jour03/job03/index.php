<!-- Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles. -->

<?php


$str= "I'm sorry Dave I'm afraid I can't do that";
$voyelle = array("a","e","i","o","u","y");

$i = 0;
while(isset($str[$i])) {
  $ifV = false;
  foreach($voyelle as $vowel) {
    if($str[$i] == $vowel) {
      $ifV = true;
      break;
    }
  }
  if($ifV) {
    echo $str[$i];
  }
  $i++;
}


?>