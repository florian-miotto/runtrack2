<!DOCTYPE html>
<html>
<body>

<?php  
$hauteur = 5;
$i = 1;

while ($i <= $hauteur) {
  $j = 1;
  while ($j <= $hauteur - $i) {
    ?> 
    &nbsp;
  <?php   $j++;
  }
  
  $k = 1;
  while ($k <= 2 * $i - 1) {
    if ($k == 1 || $k ==2 * $i ) {
      
      echo "/ ";
      
    }  elseif($k == 1 || $k ==2 * $i -1){
      echo "\ ";
    }
     
    else {
      echo "&nbsp; ";
    }
    $k++;
  } 
    ?> 
    <br />
  <?php 
  $i++;
}
?>  

</body>
</html>
