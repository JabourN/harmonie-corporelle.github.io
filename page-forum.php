<?php
require('actions/Utilisateurs/connexionaction.php');
include 'includes/head.php';
require('actions/Utilisateurs/securiteaction.php');
//include 'includes/navbar.php';
require('actions/Questions/publieraction.php');?>
<?php get_header(); ?>
<main>

    <br><br>
    <form class="container" method="POST">
        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
        <div class="mb-3">
            <label for="exampleInputEmaill" class="form-label">Pseudo</label> 
            <input type="text" class="form-control" name="pseudo">
        </div> 
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label> 
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
   
        <a href="http://localhost:8888/harmonie-corporelle/inscription/"><p>Je n'ai pas de compte, je m'inscris</p></a>
    </form>


    <br><br>

<form class="container" method="POST">

    <?php 
    if(isset($successMsg)){
        echo '<p>'.$successMsg.'</p>';
     }elseif(isset($errorMsg)){ 
        echo '<p>' .$errorMsg. '</p>';
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