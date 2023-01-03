
<?php


// for ($i = 2; $i <= 1000; $i++) {
  
//   $x = 1;
//   for ($j = 2; $j < $i; $j++) {
//     if ($i % $j == 0) {
//       $x = 0;
//       break;
//     }
//   }
  
  
//   if ($x) {
//     echo "$i<br />";
//   }
// }

$i = 2;  $j = 2;
while ($i <= 1000){
    $i++
       
        while ($j <= 1000){
            if ($i % $j == 0) {
                $j++;
                break;
            }
            $j++;
        }
        if ($i % $j == 0) {
            echo "$i<br />";

        }




?>