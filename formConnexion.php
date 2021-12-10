<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="styleconnexion.css">
</head>
<body>
    <div class="boxform">
        <img class="logotaskit" src="img/logotaskit.png"></img>
        <div class="dispoform">
            <div class="annonceinscription">
                <div class="titre">
                Connexion
                </div>
                <div class="description">
                Organisez vous équipes et votre façon de travailler en Kanban
                </div>
            </div>
            <form name="formconnexion" action="./connexion.php" method="post">
                <label for="email">Votre email</label>
                <div class="saisietxt">
                    <input type="text" id="email" name="email" placeholder="Votre e-mail">
                </div> 
                <label for="pass">Votre mot de passe</label>
                <div class="saisietxt">
                    <input type="password" id="pass" placeholder="Votre mot de passe" name="password"> 
                </div>
                <div>
                    <input type="submit" class="bouton" name="connexion"></input>
                </div>
            </form>
        </div>
    </div>
    <img class="imagetaskit" src="img/imagetaskit.png"></img>
</body>
</html>