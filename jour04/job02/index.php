<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_GET et les valeurs associées.
Il doit y avoir deux colonnes : argument et valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page -->
<form action="" method="GET">
  <label name="name">nom</label>
    <input type="text" name="name">
    <label name="email">email</label>
    <input type="text" name="email">
    <label name="password">password</label>
    <input type="text" name="password">
   
    <input type="submit">
</form>

  <table>
    <tr>
        <td>argument</td>
        <td>valeur</td>
    </tr>
 
          <?php
          
          foreach($_GET as $key=>$value) {
           
            echo "<tr><td>$value<td><td>$key</td></tr>";
        }
        
      
        ?>
      
    <tr>
        <td></td>
        <td></td>
    </tr>
  </table> 
