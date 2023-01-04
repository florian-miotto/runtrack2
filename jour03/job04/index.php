<!-- Créez une variable de type string nommée $str et affectez y le texte :
“Dans l'espace, personne ne vous entend crier”.
Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
dans cette chaîne. -->

<?php
$str ="Dans l'espace, personne ne vous entend crier";

$ct=0;
$i = 0;
while(isset($str[$i])) {
    $i++;
    $ct++;
  }

 echo $ct;
?>