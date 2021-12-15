<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-It | Connexion</title>

  <!-- Favicons -->
  <link href="assets/img/logotaskit.png" rel="icon">
  <link href="assets/img/logotaskit.png" rel="task-it icon">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styleconnexion.css">
</head>
<body>

    <div class="main">


    <div class="left">
        
        <form name="formconnexion" action="./connexion.php" method="post">
            <a class="backward" href="./index.html">Accueil</a>
            <div class="logo"></div>
            <div class="text-container">
                <h1>Connexion</h1>
                <p>Organisez vos equipes et votre facon de travaillez en kanban </p>
                <div class="google"><a  href="http://"> <div class="img"></div> <p>Continuez avec Google</p></a></div>
                
                <span>------------- ou utilisez votre Email -------------</span>
            </div>
            
            
            <div class="saisitxt" id="bof">
            <label for="email">Email</label> 
            <input type="email"  name="email" id="email"  placeholder="mail@abc.com" required>
            </div>
            <div class="saisitxt">  
            <label for="password">Mot de passe </label> 
            <input id="password" type="password" name="password" id="password"  placeholder="******"  required>
            <a href="http://" target="_blank" rel="noopener noreferrer">Mot de passe oublié?</a>
            </div>
            
            
            <div class="button">
                <input type="submit" class="mybutton" name="connexion" value="Se connecter">
            </div>


            <div class="form-footer">
                <p>Pas de compte?</p>
                <a href="./formInscription.php">Créer nouveau compte</a>
            </div>

        </form>


        


    </div>


    <div class="right">

        
    </div>














    </div>




</body>
</html>

