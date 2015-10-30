<?php
if ($note == 0) {
  echo "Tu es vraiment un nul tout rond !!";
}
elseif ($note == 5) {
  echo "Tu es très mauvais...";
}
elseif ($note == 7) {
  echo "Tu es quand même assez mauvais.";
}
elseif ($note == 10) {
  echo "Ti as pile poil la moyenne, c'est un peu juste quand même...";
}
elseif ($note == 12) {
  echo "Tu es assez bon.";
}
elseif ($note == 16) {
  echo "Tu te débrouilles très bien !";
}
elseif ($note == 20) {
  echo "Excellent travail, c'est parfait !";
}
else {
  echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
<?php // Voici le même exemple avec switch
$note = 10
?>
