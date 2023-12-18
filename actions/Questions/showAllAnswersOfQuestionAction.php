<?php

require('database.php');

// Assurez-vous que $idOfTheQuestion est défini (peut être récupéré à partir d'une source appropriée)
if (isset($idOfTheQuestion)) {

    $getAllAnswersOfThisQuestion = $bdd->prepare('SELECT id_author, pseudo_author, id_question, content FROM answers WHERE id_question = ? ORDER BY id DESC');
    $getAllAnswersOfThisQuestion->execute(array($idOfTheQuestion));

} else {
    // Gérer le cas où $idOfTheQuestion n'est pas défini
    echo "Erreur : idOfTheQuestion non défini.";
}
?>
