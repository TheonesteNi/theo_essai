<?php
include ("Connection.php");
?>
<?php
    if(isset($_POST['Envoyer']))
    {
        $Numero = $POST['Numero'];
        $Nom = $POST['Nom'];
        $Prenom = $POST['Prenom'];
        $Quartier = $POST['Quartier'];
        $Age = $POST['Age'];

        $host = 'localhost';
        $user = 'Ubuntu';
        $pass = 'Azerty#Qwerty';
        $dbname = 'Information';

        $conn = mysqli_connect($host,$user,$pass,$dbname);
        $sql = "INSERT INTO Personne(Numero,Nom,Prenom,Quartier,Age) VALUES ('$Numero', '$Nom', '$Prenom', '$Quartier', '$Age')";
        mysqli_query($conn,$sql);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<style>
    body{
        background-color: lightgrey;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    form{
        display: grid;
        padding: 2em;
    }

</style>
<body>
    <h2>Veillez completer le formulaire</h2>
    <form action="Connection.php" method="get">
        <label>Numero</label>
        <input type="number" placeholder="Votre Numero"/>
        <label>Nom</label>
        <input type="text" placeholder="Votre Nom"/>
        <label>Prenom</label>
        <input type="text" placeholder="Votre Prenom"/>
        <label>Quartier</label>
        <input type="text" placeholder="Votre Quartier"/>
        <label>Age</label>
        <input type="number" placeholder="Votre Age"/>
        <input type="submit" value="Envoyer"/>
        <input type="reset" value="Annuler"/>
    </form>
</body>
</html>