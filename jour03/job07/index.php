<!-- Créez une variable de type string nommée $str et affectez y le texte :
“Certaines choses changent, et d'autres ne changeront jamais.”
Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
deuxième, le deuxième par le troisième etc.. et le dernier par le premier. -->



<?php
$str ="Certaines choses changent, et d'autres ne changeront jamais.";

$i = 0;
while (isset($str[$i])) {
    
  if (!isset($str[$i + 1])) {
    var_dump ($str[$i]);
    echo $str[0];
  } else {
    echo $str[$i + 1];
  }
  $i++;
}

?>