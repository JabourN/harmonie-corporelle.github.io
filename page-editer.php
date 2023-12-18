<?php  require('actions/Questions/postAnswerAction.php');
    require('actions/Questions/showArticleContentAction.php'); 
    require('actions/Questions/showAllAnswersOfQuestionAction.php');
?>
<?php get_header(); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">


        <?php 
            if(isset($errorMsg)){ echo $errorMsg; }


            if(isset($question_publication_date)){
                ?>
                <section class="show-content">
                    <h3><?= $question_title; ?></h3>
                    <hr>
                    <p><?= $question_content; ?></p>
                    <hr>
                    <small><?= '<a href="http://localhost:8888/harmonie-corporelle/profil/?id='.$question_id_author.'">'.$question_pseudo_author . '</a> ' . $question_publication_date; ?></small>
                </section>
                <br>
                <section class="show-answers">

                    <form class="form-group" method="POST">
                        <div class="mb-3">
                            <p for="exampleInputEmail1" class="form-label">Commenter :</p>
                            <textarea name="answer" class="form-control"></textarea>
                            <br>
                            <button class="btn btn-primary" type="submit" name="validate">Répondre</button>
                        </div>
                    </form>

                    <?php 
                        while($answer = $getAllAnswersOfThisQuestion->fetch()){
                            ?>
                            <div class="card">
                                <div class="card-header">
                                    <a href="profile.php?id=<?= $answer['id_author']; ?>">
                                        <?= $answer['pseudo_author']; ?>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <?= $answer['content']; ?>
                                </div>
                            </div>
                            <br>
                            <?php
                        }
                    ?>

                </section>
                
                <?php
            }
        ?>

    </div>

</body>
</html>

<?php get_footer(); ?>
