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
  <title>Exercice 10 Partie 5 php</title>
 </head>
 <body>

<!-- Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
      Cela pourra être, par exemple, de la forme :
     "Le département" + nom du département + "a le numéro" + numéro du département -->
<?php
  foreach($hautsDeFrance as $departmentNumber => $department) { ?>
    <p>Le département : <?= $department; ?>, a le numéro : <?= $departmentNumber; ?></p>
  <?php }
 ?>

</body>
</html>
