<?php require('database.php');
// Validation du formulaire
if(isset($_POST['validate'])){

    // Vérifier si l'utilisateur a complété tous les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){

        // Les données de l'utilisateur
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        $checkIfUsersExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $checkIfUsersExists->execute(array($user_pseudo));
        
        if( $checkIfUsersExists->rowCount() > 0){
      
        $usersInfos = $checkIfUsersExists->fetch();
        if(password_verify($user_password, $usersInfos['password'])){
       
                 // Authentification de l'utilisateur sur le site et récupération de données
                 $_SESSION['auth'] = true;
                 $_SESSION['id'] = $usersInfos['id'];
                 $_SESSION['lastname'] = $usersInfos['lastname'];
                 $_SESSION['firstname'] = $usersInfos['firstname'];
                 $_SESSION['pseudo'] = $usersInfos['pseudo'];
             
        header('Location:/harmonie-corporelle/index.php');
        exit();

        }else{
            $errorMsg = "Mot de passe incorrect"; 
        }

        } else {
            $errorMsg = "Pseudo incorrect"; 
        }

    } else {
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
?>
