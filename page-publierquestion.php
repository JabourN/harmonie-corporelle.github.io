<?php
require('actions/Questions/publieraction.php');
require('actions/Utilisateurs/securiteaction.php');
include 'includes/head.php';

//include 'includes/navbar.php';?>

<?php get_header(); ?>
<main>
<?php include 'includes/navbar.php'; ?>
<form class="container" method="POST">

    <?php 
    if(isset($errorMsg)){ 
        echo '<p>'.$errorMsg.'</p>';
     }elseif(isset($successMsg)){
        echo '<p>' .$successMsg. '</p>';
     }
     ?>

    <div class="mb-3">
        <p>Titre de la question</p> 
        <input type="text" class="form-control" name="title">
    </div> 
    <div class="mb-3">
        <p>Description de la question</p> 
        <textarea class="form-control" name="description"></textarea>
    </div> 
    <div class="mb-3">
        <p>Contenu de la question</p> 
        <textarea class="form-control" name="content"></textarea>
    </div> 

    <button type="submit" class="btn btn-primary" name="validate">Publier</button>
   <br>
</form>
</main>
<?php get_footer(); ?>