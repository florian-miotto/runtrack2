<!-- Job 07
En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez la superficie totale des étages dans une colonne nommée
“superficie_totale”. Affichez le résultat de cette requête dans un tableau html. La
première ligne de votre tableau html doit contenir le nom des champs. Les suivantes
doivent contenir les données présentes dans votre base de données. -->



<?php
$mysqli  = new mysqli('localhost', 'root', '', 'jour09');
$request = $mysqli->query("SELECT SUM(`superficie`) AS superficie_totale FROM etage");
$row = $request->fetch_assoc();
$superficie_totale = $row['superficie_totale'];


echo '<table border =1>
    <thead>
        <tr>
        <th>superficie_totale</th>
 
          
        </tr>
    </thead>
    <tbody>';
   
    echo '<tr>
        <td>'.$superficie_totale.'</td>
 
     
     
    </tr>';
    
echo '</tbody>
</table>';
$mysqli->close();
?>


