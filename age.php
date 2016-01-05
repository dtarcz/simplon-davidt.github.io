<?php
$age = "toto";

if ($age <= 12) // si l'âge est inférieur ou égal à 12 ans
{
  echo "Salut minot ! Bienvenue sur mon site !<br>";
  $autorisation_entrer = "Oui";
}
else {
  echo "Ceci est un site pour petits enfants, vous êtes trop vieux pour pouvoir entrer. Au revoir !<br>";
  $autorisation_entrer = "Non";
}

echo 'Avez-vous l\'autorisation d\'entrer ? La réponse est ' . $autorisation_entrer;
?>

<?php
if ($autorisation_entrer == "Oui") // SI on a l'autorisation d'entrer
{
  # code...
}
elseif ($autorisation_entrer == "Non") // SINON SI on n'a pas l'autorisation d'entrer
{
  # code...
}
else // SINON (la variable ne contient ni oui ni non, on ne peut pas agir...)
{
  echo "Euh, Dis moi, quel est ton âge, peux-tu me le rappeler s'il te plaît ?";
}
 ?>
