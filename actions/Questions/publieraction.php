<?php require('database.php'); ?>
<?php

if(isset($_POST['validate'])){

    if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])){

        $question_title = htmlspecialchars($_POST['title']);
        $question_description = nl2br(htmlspecialchars($_POST['description']));
        $question_content = nl2br(htmlspecialchars($_POST['content']));
        $question_date = date('d-m-Y');
        $question_id_author = $_SESSION['id'];
        $question_pseudo_author = $_SESSION['pseudo'];

        $insertQuestionsOnWebsite = $bdd->prepare('INSERT INTO questions(title, description, content, id_author, pseudo_author, date_publication) VALUES (?, ?, ?, ?, ?, ?)');
        $insertQuestionsOnWebsite->execute([$question_title, $question_description, $question_content, $question_id_author, $question_pseudo_author, $question_date]);
       
        $successMsg = "Votre question a bien été publier sur le site";
    }else{
        $errorMsg = "Veuillez compléter tous les champs";
    }
} 
?>
