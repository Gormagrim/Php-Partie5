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
  <title>Exercice 9 Partie 5 php</title>
 </head>
 <body>

<!-- Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->
<?php
  foreach($hautsDeFrance as $cle => $element) { ?>
    <p><?= $cle; ?> est le numéro du département : <?= $element; ?></p>
  <?php }
 ?>

</body>
</html>
