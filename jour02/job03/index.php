<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        ?>La Plateforme_<br /><?php
    } elseif ($i >= 0 && $i <= 20) {
        echo '<i>' . $i . '</i><br />';
    } elseif ($i >= 25 && $i <= 50) {
        echo '<u>' . $i . '</u><br />';
    } else {
        echo $i . '<br />';
    }
}

?>