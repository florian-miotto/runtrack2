<!-- En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez le prenom, le nom et la date de naissance des étudiants de sexe
féminin. Affichez le résultat de cette requête dans un tableau html. La première ligne de
votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données. -->



<?php
$mysqli  = new mysqli('localhost', 'root', '', 'jour09');
$request = $mysqli->query("SELECT `prenom`,`nom`,`naissance` FROM `etudiants` WHERE sexe='Femme'");


echo '<table border =1>
    <thead>
        <tr>
        <th>prenom</th>
            <th>nom</th>
            <th>naissance</th>
          
        </tr>
    </thead>
    <tbody>';
while ($row = $request->fetch_assoc()) {
    echo '<tr>
        <td>'.$row["prenom"].'</td>
        <td>'.$row["nom"].'</td>
        <td>'.$row["naissance"].'</td>
     
    </tr>';
}
echo '</tbody>
</table>';
$mysqli->close();
?>


