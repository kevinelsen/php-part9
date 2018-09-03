 <?php
    // affichage de la première date
      $dateday = date('d-m-Y');
     //Première date avec une incrémentation de 20
        $nextday = time()+(20*24*60*60);        
     ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>     
      <p><?php echo $dateday; ?></p>
     <p>20jours après première date:</p>
     <p><?php echo date('d-m-Y',$nextday);?></p>
  </body>
</html>