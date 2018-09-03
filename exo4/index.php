 <?php
        echo time();
        ?>
        <!--timestamp du 2 aout 2016 à 15h -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <p>timestamp:</p>
            <?php
            echo mktime(15, 0, 0, 8, 2, 2016);
            ?>
        </p>
    </body>
</html>