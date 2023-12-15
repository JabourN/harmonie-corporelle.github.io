<?php 
try {
session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=harmonie-corporelle;charset=utf8', 'root', 'root');
}catch(Exception $e) {
    die('Une erreur a été trouvée ; ' . $e->getMessage());
}