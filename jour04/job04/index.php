<form action="" method="POST">
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
          
          foreach($_POST as $key=>$value) {
           
            echo "<tr><td>$value<td><td>$key</td></tr>";
        }
        
      
        ?>
      
    <tr>
        <td></td>
        <td></td>
    </tr>
  </table> 