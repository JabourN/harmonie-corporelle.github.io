<?php
include 'includes/head.php';
require('actions/securiteaction.php');
if (isset($errorMsg)) {
    echo '<p>' . $errorMsg . '</p>';
}
?>
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
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
    </form>
</main>
<?php get_footer(); ?>