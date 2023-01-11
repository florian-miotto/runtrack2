<!-- Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre une
chaîne de caractères nommée “$str”.
Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
qu’elle doit la modifier de sorte à ce que :
● les “A” deviennent des “4”,
● les “B” des “8”,
● les “E” des “3”,
● les “G” des “6”,
● les “L” des “1”,
● les “S” des “5”
● les “T” des “7”.
Cela est valable que l’on crie ou non (majuscules et minuscules).-->

<?php
    function leetSpeak($str) {
        $output = "";
        $leet_speek_dict = array(
            'a' => '4',
            'b' => '8',
            'e' => '3',
            'g' => '6',
            'l' => '1',
            's' => '5',
            't' => '7'
        );
        for($i = 0; $i < strlen($str); $i++) {
            $char = strtolower($str[$i]);
            if (array_key_exists($char, $leet_speek_dict)){
                $output .= $leet_speek_dict[$char];
            } else {
                $output .= $str[$i];
            }
        }
        return $output;
    }
    echo leetSpeak("Bonjour"); 
?>

