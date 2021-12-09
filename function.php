
<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=taskit;charset=utf8', 'root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

function isValid($string){
	return isset($string) && !empty($string);}


if (isset($_POST['forminscription'])) {
    
    //attribution données du formulaire à une variable sécurisée
    $nom = htmlspecialchars($_POST['nom_user']);
    $prenom = htmlspecialchars($_POST['prenom_user']);
    $pseudo = htmlspecialchars($_POST['pseudo_user']);
    $email = htmlspecialchars($_POST['email_user']);
    $email2 = htmlspecialchars($_POST['sndemail_user']);
    $password = sha1($_POST['password_user']);
    $password2 = sha1($_POST['sndpassword_user']);

    // Test avec la fonction isValid si les champs du formulaire ne sont pas vide
    if (isValid($_POST['nom_user']) &&  isValid($_POST['prenom_user']) && isValid($_POST['email_user']) && isValid($_POST['password_user']) && isValid($_POST['sndpassword_user'])) {
       

        $pseudolenght = strlen($pseudo); // calcul de la taile du pseudo

        if ($pseudolenght <= 255) { // si le pseudo fait moins de 255 caractères, on réalise une série de conditions

            if ($email == $email2) { // si champ email 1 = champ email 2
                
                    if ($password == $password2) { // si champ password1 = champ password 2

                        //on insère dans la base de données les données fournis dans le formualaire
                        $insertuser = $db->prepare("INSERT INTO user (firstname, lastname, entreprise, email, password) VALUES (?, ?, ?, ?, ?)");
                        $insertuser->execute(array($nom, $prenom, $pseudo, $email, $password));
                        $erreurInscription = "Votre compte a bien été créer !<a href=\"connexion.php\">Me connecter</a>";

                    // si il y a des erreurs, on affiche des messages d'erreurs       
                    } else {
                        $erreurInscription = "Vos mots de passes ne correspondent pas";
                    }
                } else {
                    $erreurInscription = "Vos adresses mails ne correspondent pas";
                }
            } else {
                $erreurInscription = "Votre pseudo ne doit pas dépasser 255 caractères";
            }
        } else {
            $erreurInscription = "Tout les champs doivent être complétés";
        }
}

?>