<!-- Job 09
En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez l’ensemble des informations des salles en les triant par capacité
décroissante. Affichez le résultat de cette requête dans un tableau html. La première
ligne de votre tableau html doit contenir le nom des champs. Les suivantes doivent
contenir les données présentes dans votre base de données. -->



<?php
$mysqli  = new mysqli('localhost', 'root', '', 'jour09');
$request = $mysqli->query("SELECT * FROM `salles`  ORDER BY`capacite`DESC");

echo '<table border =1>
    <thead>
        <tr>
        <th>nom</th>
        <th>id_etage</th>
        <th>capacite</th>
          
        </tr>
    </thead>
    <tbody>';
    while ($row = $request->fetch_assoc()) {
        echo '<tr>
            <td>'.$row["nom"].'</td>
            <td>'.$row["id_etage"].'</td>
            <td>'.$row["capacite"].'</td>         
        </tr>';
    }  
echo '</tbody>
</table>';
$mysqli->close();
?>


