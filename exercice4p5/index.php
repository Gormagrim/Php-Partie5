<?php
$month = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 4 Partie 5 php</title>
 </head>
 <body>

<!-- Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. -->
<?php $month[7] = 'août'; ?>
<p><?= $month[7] ?></p>

<!-- A vérifier ne fonctionne pas ! -->
<?php str_replace('aout', 'août', $month[7]);
      echo $month[7] ?>

</body>
</html>
