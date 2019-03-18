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
  <title>Exercice 6 Partie 5 php</title>
 </head>
 <body>

<!-- Avec le tableau de l'exercice 5, afficher la valeur de l'index 59. -->
<p><?= $hautsDeFrance[59]; ?></p>

</body>
</html>
