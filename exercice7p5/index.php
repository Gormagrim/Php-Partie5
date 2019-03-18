<?php
$hautsDeFrance = array(
  '02' => 'Aisne',
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme',
);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 7 Partie 5 php</title>
 </head>
 <body>

<!-- Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. -->
<?php
$hautsDeFrance['51'] = 'Marne';
var_dump($hautsDeFrance);
 ?>

</body>
</html>
