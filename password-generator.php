<!DOCTYPE html>
<html>
<head>
<title>Mot de passe aléatoire</title>
  <link href="style.css" rel="stylesheet">
<meta charset="utf-8" />
</head>
  <body>

<div class="container">

<?php

if(isset($_POST['generate'])) {
     // longueur du mot de passe
    $length = 10;
    // caractères possibles pour le mot de passe
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!*()_+<>?'; 
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    echo "Voici votre mot de passe généré aléatoirement : " . $password . "</br>";
}

?>
  </br>
<div>
  Pour retoruner à l'accueil :
</div>
<a href="index.html">Home</a>
</div>
  </body>
</html>