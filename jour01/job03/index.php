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

$variables = array(
    'Booleen' => $boolean,
    'Entier' => $integer,
    'Chaîne de caractères' => $string,
    'Nombre à virgule flottante' => $float
);

echo '<table>';
echo '<tr>';
echo '<th>Type</th>';
echo '<th>Nom</th>';
echo '<th>Valeur</th>';
echo '</tr>';
foreach ($variables as $type => $value) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($type) . '</td>';
    echo '<td>$' . htmlspecialchars(array_search($value, $variables)) . '</td>';
    echo '<td>' . htmlspecialchars($value) . '</td>';
    echo '</tr>';
}
echo '</table>';



?>
</body>
</html>