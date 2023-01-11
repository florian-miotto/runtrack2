<?php
    $board = [
        ["-", "-", "-"],
        ["-", "-", "-"],
        ["-", "-", "-"]
    ];

    $currentPlayer = "X";

    if (isset($_POST['case00'])) {
        $board[0][0] = $currentPlayer;
        $currentPlayer = ($currentPlayer == "X") ? "O" : "X";
        echo $currentPlayer;
        var_dump($currentPlayer);
    }

    if (isset($_POST['case01'])) {
        $board[0][1] = $currentPlayer;
        $currentPlayer = ($currentPlayer == "X") ? "O" : "X";
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
<form action="" method="post">
    <input type="submit" value="Réinitialiser la partie" name="reset">
</form>