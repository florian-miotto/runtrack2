<!-- Job 07
Créez un formulaire <form> qui contient :
● un champ <input> nommé “str” de type “text”,
● une liste déroulante <select> nommée “fonction”
● un bouton <button> submit.
Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
fonction de l’option <option> choisie dans la liste déroulante.
Les choix possibles sont :
● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
mettant en gras (<b>) les mots commençant par une lettre majuscule.
● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
(qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
chaque caractère d’un nombre égal à “$decalage”.
ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
“c”.
● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”.-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<form>
  <label for="str">Entrez une chaîne de caractères :</label>
  <input type="text" id="str" name="str">
  <br>
  <label for="fonction">Sélectionnez une fonction :</label>
  <select id="fonction" name="fonction">
    <option value="gras">gras</option>
    <option value="cesar">cesar</option>
    <option value="plateforme">plateforme</option>
  </select>
  <br>
  <button type="submit">Valider</button>
</form>


</body>
</html>
<?php
if (isset($_POST['str']) && isset($_POST['fonction'])) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];
    
    switch ($fonction) {
        case 'gras':
            gras($str);
            break;
        case 'cesar':
            cesar($str);
            break;
        case 'plateforme':
            plateforme($str);
            break;
        default:
            echo "Aucune fonction sélectionnée";
    }
}

function gras($str) {
    $words = explode(" ", $str);
    for ($i = 0; $i < count($words); $i++) {
        if (ctype_upper($words[$i][0])) {
            $words[$i] = "<b>" . $words[$i] . "</b>";
        }
    }
    $str = implode(" ", $words);
    echo $str;
}

function cesar($str, $decalage = 2) {
    $str = str_split($str);
    for ($i = 0; $i < count($str); $i++) {
        $str[$i] = chr((ord($str[$i]) + $decalage - 65) % 26 + 65);
    }
    $str = implode("", $str);
    echo $str;
}

function plateforme($str) {
    $words = explode(" ", $str);
    for ($i = 0; $i < count($words); $i++) {
        if (substr($words[$i], -2) === "me") {
            $words[$i] = $words[$i] . "_";
        }
    }
}
   

