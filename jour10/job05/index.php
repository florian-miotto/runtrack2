<!-- Job 05
En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez l’ensemble des informations des étudiants qui ont moins de 18 ans.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données. -->



<?php
$mysqli  = new mysqli('localhost', 'root', '', 'jour09');
$request = $mysqli->query("SELECT * FROM etudiants
WHERE  YEAR(CURDATE())-YEAR(naissance) > 18");


echo '<table border =1>
    <thead>
        <tr>
        <th>prenom</th>
        <th>nom</th>
        <th>naissance</th>
        <th>sexe</th>
        <th>email</th>
          
        </tr>
    </thead>
    <tbody>';
while ($row = $request->fetch_assoc()) {
    echo '<tr>
        <td>'.$row["prenom"].'</td>
        <td>'.$row["nom"].'</td>
        <td>'.$row["naissance"].'</td>
        <td>'.$row["sexe"].'</td>
        <td>'.$row["email"].'</td>
     
     
    </tr>';
}
echo '</tbody>
</table>';
$mysqli->close();
?>


