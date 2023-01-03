
<?php


for ($i = 2; $i <= 1000; $i++) {
  
  $x = 1;
  for ($j = 2; $j < $i; $j++) {
    if ($i % $j == 0) {
      $x = 0;
      break;
    }
  }
  
  
  if ($x) {
    echo "$i<br />";
  }
}


?>