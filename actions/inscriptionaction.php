<?php

require('database.php'); 

// Validation du formulaire
if(isset($_POST['validate'])){

    // Vérifier si l'utilisateur a complété tous les champs
    if(!empty($_POST['pseudo']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['password'])){

        // Les données de l'utilisateur
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Vérification si l'utilisateur existe déjà
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ? ');
        $checkIfUserAlreadyExists->execute(array($user_pseudo));
        
        if($checkIfUserAlreadyExists->rowCount() == 0){

            // Inserer l'utilisateur dans la bdd
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo, lastname, firstname, password)VALUES(?, ?, ?, ?)');
            $insertUserOnWebsite->execute(array($user_pseudo, $user_lastname, $user_firstname, $user_password));
            
            // Récupérer les informations de l'utilisateur
            $getInfosOfThisUserReq = $bdd->prepare('SELECT id, pseudo, lastname, firstname FROM users WHERE lastname = ? AND firstname = ? AND pseudo = ?');
            $getInfosOfThisUserReq->execute(array($user_lastname, $user_firstname, $user_pseudo ));

            $userInfos = $getInfosOfThisUserReq->fetch();

            // Authentification de l'utilisateur sur le site et récupération de données
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $userInfos['id'];
            $_SESSION['lastname'] = $userInfos['lastname'];
            $_SESSION['firstname'] = $userInfos['firstname'];
            $_SESSION['pseudo'] = $userInfos['pseudo'];

            // Rediriger l'utilisateur vers la page 
            header('Location: index.php');

        } else {
            $errorMsg = "L'utilisateur existe déjà sur le site";
        }

    } else {
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
?>

