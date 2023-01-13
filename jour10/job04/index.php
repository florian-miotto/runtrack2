<!-- Job 05
En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez l’ensemble des informations des étudiants qui ont moins de 18 ans.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données. -->



<?php
$mysqli  = new mysqli('localhost', 'root', '', 'jour09');
$request = $mysqli->query("SELECT `prenom` FROM `etudiants` WHERE prenom LIKE 'T%'");


echo '<table border =1>
    <thead>
        <tr>
        <th>prenom</th>
        
          
        </tr>
    </thead>
    <tbody>';
while ($row = $request->fetch_assoc()) {
    echo '<tr>
        <td>'.$row["prenom"].'</td>
     
     
    </tr>';
}
echo '</tbody>
</table>';
$mysqli->close();
?>


