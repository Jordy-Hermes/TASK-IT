<?php
session_start();
require_once("function.php");

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $bdd = connectDb();
    $getId = intval($_GET['id']);
    $result = $bdd->prepare('SELECT * FROM user WHERE id = ?');
    $result->execute(array($getId));
    $userinfo = $result->fetch();
}
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
        
        </div>
    </div>
</body>
</html>