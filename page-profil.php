<?php 
    session_start(); 
    require('actions/Utilisateurs/showOneUsersProfileAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">
        <?php 
            // Vérifier si l'utilisateur est connecté
            if(isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
                // Afficher les détails de l'utilisateur
                ?>
                <div class="card">
                    <div class="card-body">
                        <h4>@<?= $_SESSION['pseudo']; ?></h4>
                        <hr>
                        <p><?= $_SESSION['lastname'] . ' ' . $_SESSION['firstname']; ?></p>
                    </div>
                </div>
                <br>

                <?php
                // Afficher les questions de l'utilisateur (exemple)
                if (isset($getHisQuestions)) {
                    while($question = $getHisQuestions->fetch()){ 
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <?= $question['title']; ?>
                            </div>
                            <div class="card-body">
                                <?= $question['description']; ?>
                            </div>
                            <div class="card-footer">
                                Par <?= $question['pseudo_author']; ?> le <?= $question['date_publication'];  ?>
                            </div>
                        </div>
                        <br>
                        <?php
                    }
                }
            // Ajouter le bouton de déconnexion
            echo '<form action="actions/Utilisateurs/deconnexion.php" method="post">';
            echo '    <button type="submit" name="deconnexion">Déconnexion</button>';
            echo '</form>';

            } else {
                // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
                header('Location: http://localhost:8888/harmonie-corporelle/connexion');
                exit();
            }
        ?>  
    </div>

</body>
</html>
