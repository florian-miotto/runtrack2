<!-- Job 04
Créez un formulaire de connexion qui contient un input de type de text nommé
“prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
nouveau afficher le formulaire de connexion. -->



<?php
    if (isset($_POST['connexion'])) {
        setcookie('prenom', $_POST['prenom'], time() + (86400 * 30)); 
    }
    if (isset($_POST['deco'])) {
        setcookie('prenom', '', time() - 3600); 
        
    }
?>

<?php if (!isset($_COOKIE['prenom'])): ?>
    <form action="" method="post">
        <label for="prenom">Enter your prenom:</label>
        <input type="text" id="prenom" name="prenom">
        <input type="submit" value="connexion" name="connexion">
    </form>
<?php else: ?>
    <p>Bonjour <?= $_COOKIE['prenom'] ?> !</p>
    <form action="" method="post">
        <input type="submit" value="deco" name="deco">
    </form>
<?php endif; ?>
