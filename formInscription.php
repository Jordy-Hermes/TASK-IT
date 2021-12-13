<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="styleinscription.css">
</head>
<body>
    <div class="boxform">
        <img class="logotaskit" src="img/logotaskit.png"></img>
        <div class="dispoform">
            <div class="annonceinscription">
                <div class="titre">
                Inscription
                </div>
                <div class="description">
                Inscrivez vous facilement et venez partager l’expérience Task-IT
                </div>
            </div>
            <form name="forminscription" action="./inscription.php" method="post">
                <div class="saisietxt">
                    <label for="lastname">Nom</label>
                    <input type="text" name="lastname" id="lastname">
                </div>
                <div class="saisietxt">
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                <div class="saisietxt">
                    <label for="Company">Votre Compagnie</label>
                    <input type="text" name="entreprise" id="entreprise">
                </div>
                <label for="email">Votre email</label>
                <div>
                <input type="email" id="email" name="email" required>
                </div>
                <div class="saisietxt">
                    <label for="Password">Votre Mot de passe</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="saisietxt">
                    <label for="Password">Confirmer votre mot de passe</label>
                    <input type="password" name="Password" id="Password">
                </div>
                <div>
                    <input type="submit" class="bouton" name="submitInscription" value="S'inscrire">
                    </input>
                </div>
            </form>
        </div>
    </div>
    <img class="imagetaskit" src="img/imagetaskit.png"></img>
</body>
</html>