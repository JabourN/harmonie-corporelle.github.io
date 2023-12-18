<?php

require('database.php');

if (isset($_POST['validate'])) {

    if (!empty($_POST['answer']) && isset($_POST['id_question'])) {

        $user_answer = nl2br(htmlspecialchars($_POST['answer']));
        $idOfTheQuestion = $_POST['id_question']; // Assurez-vous que le nom du champ correspond à celui dans votre formulaire

        $insertAnswer = $bdd->prepare('INSERT INTO answers(id_auteur, pseudo_auteur, id_question, contenu) VALUES (?, ?, ?, ?)');
        $insertAnswer->execute(array($_SESSION['id'], $_SESSION['pseudo'], $idOfTheQuestion, $user_answer));

    } else {
        // Gérer le cas où les données nécessaires ne sont pas fournies
        echo "Erreur : answer ou id_question non défini.";
    }
}
