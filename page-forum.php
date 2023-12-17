
<?php
require('actions/Questions/maquestionaction.php');
require('actions/Utilisateurs/securiteaction.php');
include 'includes/head.php';
?>

<?php get_header(); ?>

<main>
<?php include 'includes/navbar.php'; ?>
<div class="container">
   <?php
    // Boucle fetch pour récupérer chaque donnée
    while($questions = $getAllmyquestions->fetch()) {
    ?>
        <div class="card">
            <h5 class="card-header">
                <?php echo $questions['title']; ?>
            </h5> <div class="card-body">
                <p class="card-text">
                    <?php echo $questions['description']; ?>
                </p>
            <div class="card-body">
                <p class="card-text">
                    <?php echo $questions['content']; ?>
                </p>
                <a href="#" class="btn btn-primary">Accéder à la question</a>
                <a href="#" class="btn btn-warning">Modifier la question</a>
            </div>
        </div>
    <?php
    }
    ?>
 
</div>
    
</main>

<?php get_footer(); ?>
