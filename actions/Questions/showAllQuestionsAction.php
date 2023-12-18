<?php

require('database.php');

//Récupérer les questions par défaut sans recherche
$getAllQuestions = $bdd->query('SELECT id, id_author, title, description, pseudo_author, date_publication FROM questions ORDER BY id DESC LIMIT 0,5');

//Vérifier si une recherche a été rentrée par l'utlisateur
if(isset($_GET['search']) AND !empty($_GET['search'])){

    //La recherche
    $usersSearch = $_GET['search'];

    //Récupérer toutes les questions qui correspondent à la recherche (en fonction du titre)
    $getAllQuestions = $bdd->query('SELECT id, id_author, title, description, pseudo_author, date_publication FROM questions WHERE title LIKE "%'.$usersSearch.'%" ORDER BY id DESC');

}