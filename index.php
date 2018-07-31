<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2/6</title>
  </head>
  <body>
    <!-- exo02-6/?lastname=Nemare&firstname=Jean -->
      <p>
      <?php
        if (isset($_GET['age'])) {
        echo $_GET['age'] . ' ';
      } else {
        echo 'Veuillez saisir votre âge';
      }
      ?>
      </p>
  </body>
</html>
