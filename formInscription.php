<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Task-It | Inscription</title>

    <!-- Favicons -->
    <link href="assets/img/logotaskit.png" rel="icon">
    <link href="assets/img/logotaskit.png" rel="task-it icon">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styleinscription.css">
</head>
<body>

    <div class="main">

  <!-------------------- Case de gauche --------------------------------->

    <div class="left">
        <form name="forminscription" action="./inscription.php" method="post">
            <a class="backward" href="./index.html">Accueil</a>
            <div class="logo"></div>
            <div class="text-container">
                <h1>Inscription</h1>
                <p>Inscrivez vous facilement et venez partager l’expérience Task-IT </p>
            </div>
            
            <div class="saisitxt">
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" id="lastname" placeholder="Nom" required>
            </div>
            <div class="saisitxt">
                <label for="firstname">Prenom</label>
                <input type="text" name="firstname" id="firstname" placeholder="Prenom" required>
            </div>
            <div class="saisitxt">
                <label for="entreprise">Votre compagnie</label>
                <input type="text" name="entreprise" id="entreprise" placeholder="Nom de votre compagnie" required>
            </div>
            <div class="saisitxt">
            <label for="email">Email</label> 
            <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="saisitxt">  
            <label for="password">Mot de passe </label> 
            <input id="password" name="password" type="password" placeholder="******"  required>
            </div>
            <div class="saisitxt">
            <label for="confirm_password">Confirmer le mot de passe </label> 
            <input id="confirm_password" name="password" type="password" placeholder="******"  required>
            </div>
            
            <div class="button">
                <input type="submit" class="mybutton" name="submitInscription" value="S'inscrire">
            </div>
        </form>


    </div>

<!---------------------------- Fin de la case de gauche ------------------------------------------------>



<!---------------------------- Case de droite ------------------------------------------------>

    <div class="right">

        
    </div>
<!---------------------------- Fin de la case de droite ------------------------------------------------>







<!---------------------------- Script pour s'assurer que le mot de passe concorde avec celui taper dans "confirmer mot de passe" ------------------------------------------------>

<script>

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
      
    confirm_password.setCustomValidity("Les mots de passe saisis ne concordent pas.");
    
    confirm_password.classList.add("nomatch");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


</script>

<!---------------------------- Fin du script pour  ------------------------------------------------>







</div>




</body>
</html>

