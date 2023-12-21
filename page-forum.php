<?php 
    session_start();
    require('actions/Questions/showAllQuestionsAction.php');
?>
<?php get_header(); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">
    
        <form method="GET">

            <div class="form-group row">

                <div class="col-8">
                    <input type="search" name="search" class="form-control">
                </div>
                <div class="col-4">
                    <button class="btn btn-success" type="submit">Rechercher</button>
                </div>

            </div>
        </form>

        <br>

        <?php 
            while($question = $getAllQuestions->fetch()){
                ?>
                <div class="card">
                    <div class="card-header">
                        <a href="article.php?id=<?= $question['id']; ?>">
                            <?= $question['title']; ?>
                        </a>
                    </div>
                    <div class="card-body">
                        <?= $question['description']; ?>
                    </div>
                    <div class="card-footer">
                        Publié par <a href="http://localhost:8888/harmonie-corporelle/profil/?id=<?= $question['id_author']; ?>"><?= $question['pseudo_author']; ?></a> le <?= $question['date_publication']; ?>
                    </div>
                </div>
                <br>
                <?php
            }
        ?>

    </div>

</body>
</html>
<?php get_footer(); ?>