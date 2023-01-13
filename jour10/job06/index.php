<!-- Job 06
En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez le nombre total d’étudiants dans une colonne nommée “nb_etudiants”.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom du champ. -->



<?php
$mysqli  = new mysqli('localhost', 'root', '', 'jour09');
$request = $mysqli->query("SELECT COUNT(*) AS NB_etudiant FROM etudiants");
$row = $request->fetch_assoc();
$NB_etudiants = $row['NB_etudiant'];


echo '<table border =1>
    <thead>
        <tr>
        <th>nb_etudiants</th>
 
          
        </tr>
    </thead>
    <tbody>';
   
    echo '<tr>
        <td>'.$NB_etudiants.'</td>
 
     
     
    </tr>';
    
echo '</tbody>
</table>';
$mysqli->close();
?>


