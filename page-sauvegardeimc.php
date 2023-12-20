<?php
// Récupérer les données de l'IMC à partir des paramètres d'URL
$poids = $_GET['poids'];
$taille = $_GET['taille'];
$imc = $_GET['imc'];
$corpullence = $_GET['corpullence'];

// Maintenant, vous pouvez utiliser ces variables comme bon vous semble dans votre page sauvegardeimc.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sauvegarde IMC</title>
</head>
<body>
    <h1>Résultats de l'IMC sauvegardés</h1>

    <p>Les données de l'IMC que vous avez sauvegardées sont les suivantes :</p>
    <ul>
        <li>Poids: <?php echo $poids; ?> kilos</li>
        <li>Taille: <?php echo $taille; ?> mètres</li>
        <li>IMC: <?php echo $imc; ?></li>
        <li>Corpulence: <?php echo $corpullence; ?></li>
    </ul>

    <!-- Ajoutez le reste du contenu de votre page sauvegardeimc.php selon vos besoins -->
</body>
</html>
