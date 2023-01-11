<?php
    session_start(); // start the session

    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = array();
    }

    if (isset($_POST['prenom'])) {
        array_push($_SESSION['prenoms'], $_POST['prenom']);
    }
?>

<form action="" method="post">
    <label for="prenom">entrer votre prenom:</label>
    <input type="text" id="prenom" name="prenom">
    <input type="submit" value="Submit">
    <input type="submit" value="reset" name="reset">
</form>

<?php
    // if (!empty($_SESSION['prenoms'])) {
    //     echo "List of prenoms: <br>";
    //     foreach ($_SESSION['prenoms'] as $prenom)
    // }

    if (!empty($_SESSION['prenoms'])) {
        echo "<ul>";
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo "<li>" . $prenom . "</li>";
        }
        echo "</ul>";
    }


    if (isset($_POST['reset'])) {
        $_SESSION['prenoms']=null;
      }
?> 