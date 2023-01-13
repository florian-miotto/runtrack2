<!--Job 11
En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez la capacité moyenne des salles. Affichez le résultat de cette requête
dans un tableau html. La première ligne de votre tableau html doit contenir le nom des
champs. Les suivantes doivent contenir les données présentes dans votre base de
données. -->




<?php
$mysqli  = new mysqli('localhost', 'root', '', 'jour09');
$request = $mysqli->query("SELECT AVG(`capacite`) AS cap_moyenne FROM salles");
$row = $request->fetch_assoc();
$cap_moyenne = $row['cap_moyenne'];

echo '<table border =1>
    <thead>
        <tr>
        <th>capacité moyenne</th>
       
          
        </tr>
    </thead>
    <tbody>';
  
    echo '<tr>
        <td>'.$cap_moyenne.'</td>
 
     
     
    </tr>';
    
echo '</tbody>
</table>';
$mysqli->close();
?>


