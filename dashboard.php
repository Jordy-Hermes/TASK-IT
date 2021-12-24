<?php
session_start();
require_once("function.php");

$bdd = connectDb();

$query = $bdd->prepare('SELECT * FROM user WHERE id=3');
$query->execute();
$userinfo = $query->fetch();

$result = $bdd->prepare('SELECT * FROM project WHERE iduser=1');
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
        <input type="button" value="Déconnexion" onclick="window.location.href='deconnexion.php';"/>
    </div>    
    <div class="dashboard">
        <div class="imageuser">
            <img class="imageUser" src="img/imageuser.png"></img>
            
            
        </div>
        <div class="contain">
        <a href="addProject.php">Ajoutez un nouveau projet !</a>
        <?php
            while($projetinfo = $result->fetch()) {
                echo("<h1>" . $nomUser . " " . $prenomUser . " !</h1></br>");
                echo("<p>Voici la liste de vos projets : " . $nameProject . " Et la description " . $descriptionProject . " !</p>");
            };
            
        ?>
        </div>
    </div>
</body>
</html>