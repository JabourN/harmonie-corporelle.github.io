<?php require('database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfQuestions = $_GET['id'];

    $checkInQuestionExists = $bdd->preprare('SELECT id, id_author FROM questions WHERE id = ?');
    $checkInQuestionExists->execute(array($idOfQuestions));

    if($checkInQuestionExists->rowCount() > 0 ){
        
        $questionInfos = $checkInQuestionExists->fetch();
        if($questionInfos['id_auhor'] == $_SESSION['id']){

                $question_title = $questionInfos['title'];
                $question_description = $questionInfos['description'];
                $question_content = $questionInfos['content'];

        }else{
            $errorMsg = "Vous n'êtes pas l'auteur de cette question.";
        }

    }else{
        $errorMsg = "Aucune question n'a été trouvée 🥲";
    }

}else{
    echo $errorMsg = "Aucune question n'a été trouvée 🥲";
}
?>