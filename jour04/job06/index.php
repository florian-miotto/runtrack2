<!-- Job 06

Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method ="GET" id = "form" name = "form">
<input type =text   name = "nombre" id = "nombre">
<input type =submit>
</form>    
<?php






while(isset($_GET['nombre'])) {
  if($_GET['nombre'] % 2 == 0) {
    echo "Nombre pair";
    break;
  }
  else {
    echo "Nombre impair";
    break;

  } 
}
?>


</body>
</html>


