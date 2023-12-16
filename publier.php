<?php
require('actions/Questions/publieraction.php');
require('actions/Utilisateurs/securiteaction.php');
include 'includes/head.php';

//include 'includes/navbar.php';?>

<?php get_header(); ?>
<main>

<form class="container" method="POST">

    <?php 
    if(isset($errorMsg)){ 
        echo '<p>'.$errorMsg.'</p>';
     }elseif(isset($successMsg)){
        echo '<p>' .$successMsg. '</p>';
     }
     ?>

    <div class="mb-3">
        <label for="exampleInputEmaill" class="form-label">Titre de la question</label> 
        <input type="text" class="form-control" name="title">
    </div> 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description de la question</label> 
        <textarea class="form-control" name="description"></textarea>
    </div> 
    <div class="mb-3">
        <label for="exampleInputEmaill" class="form-label">Contenu de la question</label> 
        <textarea class="form-control" name="content"></textarea>
    </div> 

    <button type="submit" class="btn btn-primary" name="validate">Publier</button>
   <br>
</form>
</main>
<?php get_footer(); ?>