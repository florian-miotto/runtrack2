<!-Job 13
En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez récupérer le nom des salles et le nom de leur étage. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
doit contenir le nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données. -->


<?php
$conn = new mysqli('localhost', 'root', '', 'jour09');
$result = $conn->query("SELECT etage.nom as nom_etage, salles.nom as nom_salle FROM salles INNER JOIN etage ON etage.id=salles.id_etage");
echo '<table>
    <thead>
        <tr>
            <th>Nom de l\'étage</th>
            <th>Nom de la salle</th>
        </tr>
    </thead>
    <tbody>';
while ($row = $result->fetch_assoc()) {
    echo '<tr>
        <td>'.$row["nom_etage"].'</td>
        <td>'.$row["nom_salle"].'</td>
    </tr>';
}
echo '</tbody>
</table>';
$conn->close();
?>
