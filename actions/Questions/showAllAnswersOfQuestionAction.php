<?php

require('database.php');

$getAllAnswersOfThisQuestion = $bdd->prepare('SELECT id_auteur, pseudo_author, id_question, content FROM answers WHERE id_question = ? ORDER BY id DESC');
//$getAllAnswersOfThisQuestion->execute(array(['id_question'])); 