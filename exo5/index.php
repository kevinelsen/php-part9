<?php
        $dateday = date('Y-m-j');
        $dateverif = date('2016-05-16');
        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <p>date du jour
         <?php
        echo $dateday. ' ';
        //Date de vérification       
        echo $dateverif;
        ?>
        </p>
    </body>
</html>