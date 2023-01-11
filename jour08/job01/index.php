<?php
    session_start(); 
    if(!isset($_SESSION['nbvisites'])) {
        //  session 
        $_SESSION['nbvisites'] = 1;
    } else {
        
        $_SESSION['nbvisites']++;
    }
?>
<form action="" method="post">
   <label for="visits">Number of visits:</label>
   <input type="text" id="visits" value="<?= $_SESSION['nbvisites'] ?>" disabled>
   <input type="submit" value="reset" name="reset">
</form>

<?php
    if (isset($_POST['reset'])) {
      $_SESSION['nbvisites']=0;
    }
?>