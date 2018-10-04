<?php
session_start();
session_destroy();

echo "Vous êtes déconnecté";
?>
<!Doctype html>
<html lang="fr" dir="ltr">
<head>
  <title>Déconnexion</title>
  <meta charset="utf-8">
</head>
<body>

  <p>Pour vous reconnectez cliquez ici : </P>
    <button type="submit" value="Connexion"><a href="./connect.php">Connexion</a></button>
    <p>Pour revenir a l'accueil : </P>
      <button type="submit" value="Connexion"><a href="./index.php">Revenir a l'accueil</a></button>
</body>
</html>
