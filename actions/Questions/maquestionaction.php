<?php
require('database.php');
$getAllMyQuestions = $bdd->prepare('SELECT id, title, pseudo_author, content, description FROM questions WHERE id_author = ? ORDER BY id DESC');
$getAllMyQuestions->execute(array($_SESSION['id']));
?>
