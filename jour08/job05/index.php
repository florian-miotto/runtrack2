<!-- Job 05
Développez le fameux jeu du morpion. Faites un tableau html avec 3 lignes et 3
colonnes représentant la grille. Au début de la partie, chacune des cases contient un
bouton de type submit dont la valeur est “-”. Si un joueur clique sur ce bouton, le bouton
est remplacé par un “O” ou par un “X”. C’est le joueur “X” qui commence.
Dès qu’un joueur a gagné, affichez “X a gagné” ou “O a gagné” et réinitialisez la partie. Si
toutes les cases ont été cliquées et que personne n’a gagné, affichez “Match nul” et

réinitialisez la partie. Un bouton “réinitialiser la partie” présent en dessous de la grille
permet également de réinitialiser la partie à tout moment. -->




<?php
 session_start(); // start the session
    $board = [
        ["-", "-", "-"],
        ["-", "-", "-"],
        ["-", "-", "-"]
    ];

    $currentPlayer = "X";

    if (isset($_POST['case00'])) {
        $board[0][0] = $currentPlayer;
        $currentPlayer = ($currentPlayer == "X") ;
        echo $currentPlayer;
        var_dump($currentPlayer);
    }
    if (isset($_POST['case01'])) {
        $board[0][0] = $currentPlayer;
        $currentPlayer = ($currentPlayer == "0") ;
        echo $currentPlayer;
        var_dump($currentPlayer);
    }



if (isset($_POST[$currentPlayer=="X"])) {
 $currentPlayer ="0";   
}
 
  
    if (isset($_POST['reset'])) {
        $board = [
            ["-", "-", "-"],
            ["-", "-", "-"],
            ["-", "-", "-"]
        ];
        $currentPlayer = "X";
    }
?>
<form action="" method="post">
    <table>
    <tr>
        <td><button type="submit" name="case00" value="<?= $board[0][0] ?>"><?= $board[0][0] ?></button></td>
        <td><button type="submit" name="case01" value="<?= $board[0][1] ?>"><?= $board[0][1] ?></button></td>
        <td><button type="submit" name="case02" value="<?= $board[0][2] ?>"><?= $board[0][2] ?></button></td>
    </tr>
    <tr>
        <td><button type="submit" name="case10" value="<?= $board[1][0] ?>"><?= $board[1][0] ?></button></td>
        <td><button type="submit" name="case11" value="<?= $board[1][1] ?>"><?= $board[1][1] ?></button></td>
        <td><button type="submit" name="case12" value="<?= $board[1][2] ?>"><?= $board[1][2] ?></button></td>
    </tr>
    <tr>
        <td><button type="submit" name="case20" value="<?= $board[2][0] ?>"><?= $board[2][0] ?></button></td>
        <td><button type="submit" name="case21" value="<?= $board[2][1] ?>"><?= $board[2][1] ?></button></td>
        <td><button type="submit" name="case21" value="<?= $board[2][1] ?>"><?= $board[2][1] ?></button></td>
    </tr>  
</table> 

    <input type="submit" value="Réinitialiser la partie" name="reset">
</form>