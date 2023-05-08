<?php
    //La connexion à la base de données
    $servername ="localhost";
    $username = "root";
    $dbname = "PROJECT";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "La connexion a bien etablie";
    }
    catch (PDOException $e){
        echo "La connexion a échoué:" . $e->getMessage();
    }
    if(isset($_POST['Envoyer']))
    {
        $Nom = $_POST['Nom'];
        $Prénom = $_POST['Prénom'];
        $Téléphone = $_POST['Téléphone'];
        $Adresse = $_POST['Adresse'];
        $Email = $_POST['Email'];
        $Genre = $_POST['Genre'];
        $Civilité = $_POST['Civilité'];
        $Date = $_POST['Date'];
        $Couleur = $_POST['Couleur'];
        $Langues = $_POST['Langues'];
        $Relation = $_POST['Relation'];
        $Commentaire = $_POST['Commentaire'];

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon projet</title>
</head>
<style>
    #flex{
        display: flex;
    }
    .img{
        width: 100%;
        height: 100%;
    }
    #flex_a{
        width: 25%;
    }
    #flex_b{
        width: 50%;
        border: 5px solid;
        border-radius: 5%;
    }
    #flex_bb1{
        border: 5px solid black;
        border-radius: 20px 20px 0px 0px;
        padding-top: 0px;
        padding-bottom: 0px;
    }
    #flex_bb2{
        background-color: rgb(176, 127, 127);
        display: flex;
        padding-top: 0%;
        padding-bottom: 0%;
    }
    #flex_bb3{
        padding-top: 0px;
        padding-bottom: 0px;
        margin-top: -32px;
    }
    #flex_c{
        width: 25%;
    }
    h1{
        text-align: center;
    }
    th{
        text-align: left;
    }
    legend{
        color: red;
        text-align: center;
    }
    fieldset{
        color: green;
        border-radius: 5%;
        background-color: rgb(194, 212, 196);
        margin-top: 0px;
    }
    #submit{
        margin-left: 40%;
        height: 30px;
        color: white;
        background-color: black;
    }
    #reset{
        height: 30px;
        color: red;
        background-color: black;
    }
    input{
        color: rgb(245, 15, 141);
        background-color: rgb(243, 214, 230);
    }
    .input{
        width: 300px;
    }
    textarea{
        background-color: rgb(243, 214, 230);
    }
    .img1{
        width: 150px;
        height: 150px;
    }
    h3{
        text-align: center;
        background-color: black;
        color: white;
        margin-top: 0px;
        margin-bottom: 0px;
    }
</style>
<body>
 <div id="flex">

    <div id="flex_b">
        <div id="flex_bb1">
            <h3>Nizerimana Théoneste</h3>
        </div>
        <div id="flex_bb2">
            <div>
                <img class="img1" src="images/image.jpg"/>
            </div>
            <div>
                <h1><marquee>Veillez completer cette formulaire SVP</marquee></h1>
            </div>
            <div>
                <img class="img1" src="images/image.jpg"/>
            </div>
        </div>
        <div id="flex_bb3">
            <form action="" method="post">
              <fieldset>
                <legend><h2>Je complète mes cordonnées</h2></legend>
                <table>
                    <tr>
                        <th><label>Nom</label></th>
                        <td><input class="input" type="text" placeholder="Entrez votre nom"/></td>
                    </tr>
                    <tr>
                        <th><label>Prénom</label></th>
                        <td><input class="input" type="text" placeholder="Entrez votre prénom"/></td>
                    </tr>
                    <tr>
                        <th><label>Téléphone</label></th>
                        <td><input class="input" type="text" placeholder="Entrez votre numéro de téléphone"/></td>
                    </tr>
                    <tr>
                        <th><label>Adresse</label></th>
                        <td><input class="input" type="text" placeholder="Entrez votre adresse"/></td>
                    </tr>
                    <tr>
                        <th><label>Email</label></th>
                        <td><input class="input" type="email" placeholder="Entrez votre email"/></td>
                    </tr>
                    <tr>
                        <th><label>Genre</label></th>
                        <td><input type="radio" name="genre" value="Homme"/>Homme
                            <input type="radio" name="genre" value="Femme"/>Femme
                        </td>
                    </tr>
                    <tr>
                        <th><label>Civilité</label></th>
                        <td><input type="radio" name="civilité" value="Mlle"/>Mlle
                            <input type="radio" name="civilité" value="Mme"/>Mme
                            <input type="radio" name="civilité" value="Mr"/>Mr
                        </td>
                    </tr>
                    <tr>
                        <th><label>Date</label></th>
                        <td><input class="input" type="date"/></td>
                    </tr>
                    <tr>
                        <th><label>Couleur</label></th>
                        <td><input type="color"/></td>
                    </tr>
                    <tr>
                        <th><label>Langues</label></th>
                        <td><input type="checkbox" value="Français"/>Français
                            <input type="checkbox" value="Anglais"/>Anglais
                            <input type="checkbox" value="Swahili"/>Swahili
                            <input type="checkbox" value="China"/>China
                            <br>
                            <input type="checkbox" value="Kirundi"/>Kirundi
                            <input type="checkbox" value="Espagnol"/>Espagnol
                            <input type="checkbox" value="Lingala"/>Lingala
                            <input type="checkbox" value="Arabe"/>Arabe
                        </td>
                    </tr>
                    <tr>
                        <th><label>Relation</label></th>
                        <td><input type="radio" name="relation" value="Familiale"/>Familiale
                            <input type="radio" name="relation" value="Scolaire"/>Scolaire
                            <input type="radio" name="relation" value="Académique"/>Académique
                            <br>
                            <input type="radio" name="relation" value="Professionnelle"/>Professionnelle
                            <input type="radio" name="relation" value="Enfance"/>Enfance
                        </td>
                    </tr>
                    <tr>
                        <th><label>Commentaire</label></th>
                        <td><textarea class="input" placeholder="Ecrivez votre commentaire"></textarea></td>
                    </tr>
                </table>
                <input id="submit" type="submit" value="Envoyer"/>
                <input id="reset" type="reset" value="Annuler"/>
              </fieldset>
            </form>
        </div>
    </div>

 </div>   
</body>
</html>