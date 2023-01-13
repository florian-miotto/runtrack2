<!-- En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez l’ensemble des informations de la table etudiants. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
(thead) doit contenir le nom des champs. Les suivantes (tbody) doivent contenir les
données présentes dans votre base de données. -->



<?php
$mysqli  = new mysqli('localhost', 'root', '', 'jour09');
$request = $mysqli->query("select * from etudiants");


echo '<table border =1>
    <thead>
        <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Naissance</th>
            <th>Sexe</th>
            <th>Email</th>
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


