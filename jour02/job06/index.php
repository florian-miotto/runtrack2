<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .blok{
            width: 10px;
            height: 10px;
background-color: #111
        }
    </style>
</head>
<body>
    




<?php
$largeur = 20;
$hauteur = 10;

for ($i = 1; $i <= $hauteur; $i++) {

  for ($j = 1; $j <= $largeur; $j++) {
/*   ?><div class="blok"></div> <?php */
echo "*";
  }
  echo "<br />";
  
}
?>



</body>
</html>