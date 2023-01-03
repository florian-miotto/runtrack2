<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$boolean = true;
$integer = 42;
$string = 'hello';
$float = 3.14;

$variables = array($boolean, $integer, $string, $float);
$types = array('Booleen', 'Entier', 'Chaîne de caractères', 'Nombre à virgule flottante');
$names = array();
/*
foreach ($variables as $key => $value) {
    $name = array_search($value, get_defined_vars());
    array_push($names, $name);
    // $names[] = $name;
}*/
// var_dump(get_defined_vars());
// var_dump($names);
// print_r($names);
echo '<table>',
 '<tr>',
 '<th>Type</th>',
 '<th>Nom</th>',
 '<th>Valeur</th>',
 '</tr>';
for ($i = 0; $i < count($variables); $i++) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($types[$i]) . '</td>';
    echo '<td>' . htmlspecialchars(gettype($variables[$i])) . '</td>';
    echo '<td>' . htmlspecialchars($variables[$i]) . '</td>';
    echo '</tr>';
}
echo '</table>';



?>
</body>
</html>