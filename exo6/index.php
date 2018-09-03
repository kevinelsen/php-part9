<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>Nombre de jours dans le mois de février:</p>
    <?php
      $nbday = cal_days_in_month(CAL_GREGORIAN,2,2016);
      echo $nbday . ' ' ."jours";
     ?>
  </body>
</html>