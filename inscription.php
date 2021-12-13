<?php
require_once("function.php");



if (isset($_POST["submitInscription"])){

    $nom = htmlspecialchars($_POST['lastname']);
    $prenom = htmlspecialchars($_POST['firstname']);
    $entreprise = htmlspecialchars($_POST['entreprise']);
    $email = htmlspecialchars($_POST['email']);
    $password = sha1($_POST['password']);
    

    if (isValid($_POST['lastname']) &&  isValid($_POST['firstname']) && isValid($_POST['entreprise']) && isValid($_POST['email']) && isValid($_POST['password'])) {
    
        addUser($nom, $prenom, $entreprise, $email, $password);
    }
}

?>