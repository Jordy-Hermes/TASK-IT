<?php
require_once("function2.php");

if (isset($_POST["submitInscription"])){

    $nom = htmlspecialchars($_POST['firstname']);
    $prenom = htmlspecialchars($_POST['lastname']);
    $entreprise = htmlspecialchars($_POST['entreprise']);
    $email = htmlspecialchars($_POST['email']);
    $password = sha1($_POST['password']);

    if (isValid($_POST['firstname']) &&  isValid($_POST['lastname']) && isValid($_POST['email']) && isValid($_POST['password']) && isValid($_POST['entreprise'])) {
    
        addUser($nom, $prenom, $entreprise, $email, $password);
    }
}