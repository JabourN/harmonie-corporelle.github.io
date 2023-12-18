<?php include 'includes/head.php'; ?>

<br><br>
<form class="container" method="POST">

    <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

    <div class="mb-3">
        <label for="exampleInputEmaill" class="form-label">Titre de la question</label> 
        <input type="text" class="form-control" name="title">
    </div> 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description de la question</label> 
        <input type="text" class="form-control" name="lastname">
    </div> 
    <div class="mb-3">
        <label for="exampleInputEmaill" class="form-label">Contenu de la question</label> 
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