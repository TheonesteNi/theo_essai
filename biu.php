<?php
$source = "mysql:host=localhost;dbname=nithe";
$login = "Ubuntu";
$mdp = "Azert#Qwerty";
try{
    $db = new PDO($source, $login, $mdp);
    echo "You are connected successful Theoneste";
}
catch(PDOException $e)
{
    $error_Message = $e->getMessage();
    echo $error_Message;
    exit();
}
?>