<?php
require('actions/Questions/maquestionaction.php');
include 'includes/head.php';
?>

<?php get_header(); ?>

<main>
<?php include 'includes/navbar.php'; ?>
<div class="container">
   <?php
    // Boucle fetch pour récupérer chaque donnée
    while($questions = $getAllMyQuestions->fetch()) {
    ?>
        <div class="card">
        <h6 class="card-header">
                <?php echo $questions['pseudo_author']; ?>
            </h6> 
            <p class="card-body">
                <?php echo $questions['title']; ?>
    </p> <div class="card-body">
                <p class="card-text">
                    <?php echo $questions['description']; ?>
                </p>
            <div class="card-body">
                <p class="card-text">
                    <?php echo $questions['content']; ?>
                </p>
            </div>
            <a href="actions/Questions/deleteQuestionAction.php?id=<?= $question['id']; ?>" class="btn btn-danger">Supprimer la question</a>
        </div>
    <?php
    }
    ?>
 
</div>
    
</main>

<?php get_footer(); ?>
