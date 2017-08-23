<?php
/* Connexion à une base ODBC avec l'invocation de pilote */
$dsn = 'mysql:dbname=TestSQL;host=127.0.0.1';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'Connexion réussie';
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <a href="signup.php">Inscription</a>
  </body>
</html>
