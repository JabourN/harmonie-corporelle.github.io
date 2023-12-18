<?php require('database.php');
$getAllmyquestions = $bdd->prepare('SELECT id, title, description, content FROM questions WHERE id_author = ? ORDER BY id DESC');
$getAllmyquestions->execute(array($_SESSION['id']));
?>