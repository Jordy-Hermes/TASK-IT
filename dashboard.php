<?php
session_start();
require_once("function.php");

$bdd = connectDb();

$query = $bdd->prepare('SELECT * FROM user');
$query->execute();
$userinfo = $query->fetch();

$result = $bdd->prepare('SELECT * FROM project');
$result->execute();
$projetinfo = $result->fetch();


$nomUser = $userinfo["lastname"];
$prenomUser = $userinfo["firstname"];
$nameProject = $projetinfo["name"];
$descriptionProject = $projetinfo["description"];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styledashboard.css">
</head>
<body>
    <div class="dashbarre">
            <img class="logotaskit" src="img/logotaskit2.png"></img>
        <div class="button">
            <input type="submit"  value="Déconnexion" onclick="window.location.href='deconnexion.php';" />
        </div>
    </div>    
    <div class="dashboard">
        <div>
            <img class="imageUser" src="img/imageuser.png"></img>
            
            
        </div>
        <div class="contain">
        <a href="addProject.php">Ajoutez un nouveau projet !</a>
        <?php
            echo("<p>Bienvenue sur votre tableau de bord, " . $nomUser . " " . $prenomUser . " !</p>");
        ?>
        </div>
        <div class="listprojet">
        <?php
            echo("<p>Voici la liste de vos projets : " . $nameProject . " " . $descriptionProject . " </p>");
        ?>
        </div>
    </div>
</body>
</html>