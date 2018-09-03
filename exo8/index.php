 <?php
        // Première date
        $dateday = date('d-m-Y');
        // Décrémentation de la date
        $beforeday = time() - (22 * 24 * 60 * 60);       
        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice8</title>
    </head>
    <body>
       <?php echo $dateday;?>
        <p>Date d'avant :</p>
       <?php echo date('d-m-Y', $beforeday);?>
       <?php echo 'La date du jour - 22 jours est : ' . date('d/m/Y', strtotime('-22 days'));?>
    </body>
</html>