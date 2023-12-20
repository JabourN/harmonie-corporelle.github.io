<?php
require('database.php');
session_start();

if (isset($_POST['validate'])) {
    // ... Votre code existant pour l'inscription ...
}

if (isset($_GET['poids']) && isset($_GET['taille']) && isset($_GET['imc']) && isset($_GET['corpulence'])) {
    $poids = $_GET['poids'];
    $taille = $_GET['taille'];
    $imc = $_GET['imc'];
    $corpulence = $_GET['corpulence'];

    // Insérer les données IMC dans la table 'imc'
    $insertImcData = $bdd->prepare('INSERT INTO imc(poids, taille, imc, corpulence, user_id) VALUES (?, ?, ?, ?, ?)');
    $insertImcData->execute(array($poids, $taille, $imc, $corpulence, $_SESSION['id']));
}
?>
