<?php require('page-imc.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Autres balises meta et head ... -->
    <title>Sauvegarde IMC</title>
</head>
<body>
    <h1>Résultats de l'IMC sauvegardés</h1>

    <?php
    // Récupérer les données de l'IMC à partir des paramètres d'URL
    $poids = $_GET['poids'];
    $taille = $_GET['taille'];
    $imc = $_GET['imc'];
    $corpulence = $_GET['corpulence'];
    ?>

    <ul>
        <li>Poids: <?php echo $poids; ?> kilos</li>
        <li>Taille: <?php echo $taille; ?> mètres</li>
        <li>IMC: <?php echo $imc; ?></li>
        <li>Corpulence: <?php echo $corpulence; ?></li>
    </ul>

    <!-- ... Autres parties du code ... -->
</body>
</html>
