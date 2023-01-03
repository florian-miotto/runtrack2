<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i  %3==0 && $i%5 ==0) {
        ?>
     FizzBuzz<br />
     <?php
    } elseif ($i  %3==0 ) {
        ?>
     Fizz<br />
     <?php
  } elseif ($i  %5==0 ) {
    ?>
 buzz<br /><?php
    } else {
        echo $i . '<br />';
    }
}

?>


Si le nombre est un multiple de 5, affichez “Buzz”.
● Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”.


}