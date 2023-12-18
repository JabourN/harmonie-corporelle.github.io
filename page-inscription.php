<?php require('actions/Utilisateurs/inscriptionaction.php'); ?> 
<?php get_header(); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    
<br><br>
<form class="container" method="POST">

    <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

    <div class="mb-3">
        <p>Pseudo</p> 
        <input type="text" class="form-control" name="pseudo">
    </div> 
    <div class="mb-3">
        <p>Nom</p> 
        <input type="text" class="form-control" name="lastname">
    </div> 
    <div class="mb-3">
        <p>Prénom</p> 
        <input type="text" class="form-control" name="firstname">
    </div> 
    <div class="mb-3">
        <p>Password</p> 
        <input type="password" class="form-control" name="password">
    </div>

    <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
   <br>
    <a href="http://localhost:8888/harmonie-corporelle/connexion/"><p>J'ai déja un compte, je me connecte</p></a>
</form>
</body>
</html>

<?php get_footer(); ?>