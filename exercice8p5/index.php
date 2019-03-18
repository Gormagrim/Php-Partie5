<?php
$month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 8 Partie 5 php</title>
 </head>
 <body>

<!-- Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->
<?php
  foreach($month as $element) { ?>
    <p><?= $element; ?></p>
  <?php }
 ?>

</body>
</html>
