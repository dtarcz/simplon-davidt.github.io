<!DOCTYPE html>
<html>

  <head><meta charset="utf-8"></head>

  <body>

<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'ecodair');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

// On modifie une entrée
$bdd->exec('UPDATE jeux_video')

?>

  </body>
</html>
