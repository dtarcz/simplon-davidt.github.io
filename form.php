<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Formulaire de test&nbsp;: David TARCZEWSKI</title>
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="script/script.js"></script>
	</head>

	<body>

    <header><h1>Restons en contact&nbsp;!</h1></header>

		<nav>
		<?php include("nav.php"); ?>
		</nav>

    <section class="contact">
      <div class="coordonees">
        <p>David TARCZEWSKI,<br>
          4 rue de l'Égassiairal,<br>
					Bât. A,<br>
          11100 Narbonne<br></p>
        <p>+33 (0) 981 042 845</p>
        <p>+33 (0) 652 478 605</p>
        <p>dtarcz-at-gmail-dot-com</p>
      </div>

			<div class="carte">
				<img src="img/map.png" height="400px" />
			</div>

      <div class="contact">
        <form method="post" action="traitement.php" >
          <h2>Pour m'envoyer un email</h2>
					<h3>dans le formulaire&nbsp;, veuillez indiquer&nbsp;:</h3>
            <br>
						<fieldset>
							<legend>Vos coordonées&nbsp;:</legend>
			          <label for="prenom">Votre prénom</label>&nbsp;: <br><input type="text" name="prenom" id="prenom" placeholder="Exple: Bibi"  required />
			            <br>
			          <label for="nom">Votre nom de famille</label>&nbsp;: <br><input type="text" name="nom" id="nom" placeholder="Exple: FRICOTIN" required />
			            <br>
			          <label for="email">Votre email</label>&nbsp;: <br><input type="email" name="email" id="email" placeholder="votre-adresse@mail.com" required />
						</fieldset><br>
						<fieldset>
							<legend>La raison de votre message</legend>
			          <label for="raison">Votre objet</label>&nbsp;: <br><input type="text" name="raison" id="raison" placeholder="Exple: Pourquoi ?" />
			            <br>
			          <label for="besoin">Votre Besoin</label>&nbsp;: <br>
								<textarea name="besoin" id="besoin" required >Bonjour,
									Pourriez-vous m'indiquer comment réaliser mon CV en ligne je vous prie ?
									Merci.
								</textarea>
						</fieldset>
						<input type="image" src="http://www.sogemaservices.com/images/bouton-envoyer-bleu.png" style="height:80px;" onClick="envoyer();" />
        </form>
      </div>
    </section>

    <p class="centre"><strong>À très bientôt :) </strong></p>

  </body>

</html>
