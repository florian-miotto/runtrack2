Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
Parcourez ce tableau et affichez pour chaque nombre “X est paire<br />” ou “X est
impaire<br />”, sur votre page index.php. X prenant tour à tour chacune des valeurs
comprises dans ce tableau.


<?php
$tab1 = array ("200" => "paire", "204" => "paire", "173" => "paire", "98" => "paire", "171"=> "impaire", "404" => "paire", "459" => "impaire");



foreach($tab1 as $x => $x_value) {
    echo  $x . "est" . $x_value;
    echo "<br>";
  }

?>