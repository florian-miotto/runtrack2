<!-- Job 05

Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs <input> nommés username et password.
Après validation du formulaire :
● si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
● sinon afficher : “Votre pire cauchemar”. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<form action="" method="POST" id="form"    >
username: <input type="text" name="username"><br>
E-password: <input type="password" name="password"><br>
<input type="submit">
</form>
<?php
$username = $password = "";
if($_POST["username"]=="John"&& $_POST["password"]=="Rambo") {
    echo "<h1>C’est pas ma guerre</h1>";
}
    elseif($_POST["username"]==""&& $_POST["password"]=="")
    {echo "";
    }
else 
echo "Votre pire cauchemar";
?>

</body>
</html>