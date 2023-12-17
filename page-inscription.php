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
        <label for="exampleInputEmaill" class="form-label">Pseudo</label> 
        <input type="text" class="form-control" name="pseudo">
    </div> 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom</label> 
        <input type="text" class="form-control" name="lastname">
    </div> 
    <div class="mb-3">
        <label for="exampleInputEmaill" class="form-label">Prénom</label> 
        <input type="text" class="form-control" name="firstname">
    </div> 
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label> 
        <input type="password" class="form-control" name="password">
    </div>

    <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
   <br>
    <a href="http://localhost:8888/harmonie-corporelle/forum/"><p>J'ai déja un compte, je me connecte</p></a>
</form>
</body>
</html>