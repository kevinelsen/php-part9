<?php
// déclaration du tableau contenant les mois
$monthList = array('Veuillez choisir un mois', 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
//initialisation des variables year et month à 0
$month = 0;
$year = 0;
//vérification que le formulaire à bien été soumis
if (!empty($_POST['monthList'])) {
    $month = $_POST['monthList'];
}
if (!empty($_POST['yearList'])) {
    $year = $_POST['yearList'];
}
//on vérifie que le formulaire a bien été validé si les valeurs sont différentes de 0.
if (($month != 0) && ($year != 0)) {
    //calcul du nombre de jour dans le mois month
    $dayNumberInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    // calcul du premier jour de la semaine du mois month en format numérique
    $numberDay = strftime('%u', mktime(0, 0, 0, $month, 1, $year));
    echo $numberDay . ',' . $dayNumberInMonth;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Calendar</title>
    </head>
    <body>
        <form method="POST" action="#">
            <label for="monthList">Mois :</label>
            <select name="monthList" id="monthList">
                <?php foreach ($monthList as $monthNumber => $monthName) { ?>
                    <option value="<?= $monthNumber ?>" <?= ($monthNumber == 0) ? 'disabled selected' : '' ?>><?= $monthName ?></option>
                <?php } ?>
            </select>
            <label for="yearList">Années :</label>
            <select name="yearList" id="yearList">
                <option selected disabled>Veuillez choisir une année</option>
                <?php for ($year = 1970; $year <= 2030; $year++) { ?>
                    <option value="<?= $year ?>"><?= $year ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="Afficher" />
        </form>
        <?php
        if (($month != 0) && ($year != 0)) {
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Lundi</th>
                        <th>Mardi</th>
                        <th>Mercredi</th>
                        <th>Jeudi</th>
                        <th>Vendredi</th>
                        <th>Samedi</th>
                        <th>Dimanche</th>
                    </tr>                
                </thead>
                <tbody>
                    <?php
                    for ($day; $day <= $dayNumberInMonth; $day++) {
                        if ($numberDay != 1) {
                            for ($case; $case < $numberDay; $case++) {
                                ?>
                <td></td>
                                }
                                }

                            <td><?= $day ?>  </td>
                            <?php
                        }
                        ?>

                    </tbody>


                </table>
                <?php
            }
            ?>
</body>
</html>
