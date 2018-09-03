<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>
      <?php
        //index.php?week=12
        if (isset($_GET['week'])) {
          echo $_GET['week'];
        }

       ?>
    </p>
  </body>
</html>
