<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>

<body>
  <div>
    <?php
    try
    {
      // on se connecte à MySQL
      $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'ecodair');
    }
    catch (Exception $e)
    {
      // en cas d'erreur on arrête tout et on affiche un message
        die('Erreur : ' . $e->getMessage());
    }
    // si tout va bien on continue
    // on récup tt le contenu de la table jeux_video
    $reponse = $bdd->query('SELECT * FROM jeux_video');

    // on affiche chaque entrée une à une avec une boucle while
    while ($donnees = $reponse->fetch()) //lit une ligne et passe a la suivante
    {
    ?>
        <p>
          <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
          L'heureux possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
          Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
          <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
        </p>
    <?php
    }

    $reponse->closeCursor(); // termine le traitement de la requête

    ?>
  </div>
</body>
</html>
