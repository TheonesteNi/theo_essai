<?php
$source = "mysql:host=localhost;dbname=Information";//Nom de base de donnée
$login = "Ubuntu";//Nom d'utilisateur
$mdp = "Azerty#Qwerty";//Mot de passe
try{
    $db = new PDO($source, $login, $mdp);
    echo "You are connected successful Theoneste !";//Message si la connexion est bien établie
}
catch(PDOException $e)
{
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}
?>
