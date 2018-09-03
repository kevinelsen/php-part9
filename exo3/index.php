<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>La date du jour est :
      <?php
      setlocale(LC_TIME, 'fr_FR.utf8');
      //choisir la localisation
        echo strftime('%A %d %B %G');
        //Afficher la date, strftime
       ?>
     </p>
  </body>
</html>