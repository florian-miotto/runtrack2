<?php

    if(!isset($_COOKIE['nbvisites'])) {
        
        setcookie('nbvisites', 1, time() + (600 )); 
    } else {
        
        $visits = intval($_COOKIE['nbvisites']) + 1;
        setcookie('nbvisites', $visits, time() + (600));
        // var_dump($_COOKIE['nbvisites']);
    }
?>
<form action="" method="post">
   Number of visits:
   <input type="text" id="visits" value="<?= $_COOKIE['nbvisites'] ?>" disabled>
   <input type="submit" value="reset" name="reset">
</form>

<?php
    if (isset($_POST['reset'])) {
      setcookie('nbvisites', 0, time() + (600)); / resets the cookie value to 0
    }
?>