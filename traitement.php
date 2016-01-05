<html>
  <head>
    <meta charset="utf-8">
    <title>Ma page de traitement</title>
  </head>

  <body>

    <p>Bonjour, <?php echo htmlspecialchars($_POST['prenom']); ?></p>

  <?php
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $raison = $_POST['raison'];
  $besoin = $_POST['besoin'];
  //echo "$prenom";
  //echo "$nom";
  //echo "$email";
  //echo "$raison";
  //echo "$besoin";
  // on teste la déclaration de nos variables
  if (isset($prenom) && isset($nom) && isset($email) && isset($raison) && isset($besoin))
  {
    // on affiche nos résultats
    echo 'Votre prénom est ' . $prenom . ' <br>Votre nom est '.$nom.' <br>et vous nous contactez pour :<br>'.$besoin;
  }
  ?>

  </body>
</html>
