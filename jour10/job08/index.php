<!-- Job 08
En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez dans une colonne nommée “capacite_totale” la somme des capacités
des salles. Affichez le résultat de cette requête dans un tableau html. La première ligne
de votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir
les données présentes dans votre base de données. -->



<?php
$mysqli  = new mysqli('localhost', 'root', '', 'jour09');
$request = $mysqli->query("SELECT SUM(`capacite`) AS capacite_totale FROM salles");
$row = $request->fetch_assoc();
$capacite_totale = $row['capacite_totale'];


echo '<table border =1>
    <thead>
        <tr>
        <th>capacite_totale</th>
 
          
        </tr>
    </thead>
    <tbody>';
   
    echo '<tr>
        <td>'.$capacite_totale.'</td>
 
     
     
    </tr>';
    
echo '</tbody>
</table>';
$mysqli->close();
?>


