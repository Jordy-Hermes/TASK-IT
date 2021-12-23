<?php
session_start();
require_once("function.php");

$bdd = connectDb();
$result = $bdd->prepare('SELECT * FROM user');
$result->execute();
$userinfo = $result->fetch();
$idUser = intval($userinfo["id"]);

if (isset($_POST["addproject"])) {

    if (isValid($_POST['projet']) && isValid($_POST['description'])  && isValid($_POST['color']) ) {

        $projet = htmlspecialchars($_POST['projet']);
        $description = htmlspecialchars($_POST['description']);
        $color = htmlspecialchars($_POST['color']);
        $idUser = intval($userinfo["id"]);

        //Permet de regarder si la desc ne dépasse pas 250 caractères
        $descriptionlenght = strlen($description);
        $db = connectDb();

        if ($descriptionlenght <= 250) {

                    $inserprojet = $db->prepare("INSERT INTO project (name, iduser, description, color) VALUES (?, ?, ?, ?)");
                    $inserprojet->execute(array($projet, $idUser, $description, $color));
                    header("Location: ./dashboard.php?id=".$_SESSION['id']);
                    $erreur = "Votre projet a bien été créé !";
        } else {
            $erreur = "La description de votre project ne doit pas dépasser 250 caractères!";
        }
    } else {
        //Permet d'afficher un message d'erreur si les champs du formulaire d'inscription ne sont pas remplie
        $erreur = "Veuillez remplir tous les champs";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Task-It | Ajout d'un nouveau projet</title>

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
            <form name="forminscription" action="./addProject.php" method="post">
                <a class="backward" href="./index.html">Accueil</a>
                <div class="logo"></div>
                <div class="text-container">
                    <h1>Ajout projet</h1>
                    <p>Ajoutez de nouveaux projets à votre tableau de bord !</p>
                </div>

                <div class="saisitxt">
                    <label for="lastname">Nom du projet</label>
                    <input type="text" name="projet" id="projet" placeholder="Nom du projet" required>
                </div>
                <div class="saisitxt">
                    <label for="firstname">Description</label>
                    <input type="text" name="description" id="description" placeholder="Description" required>
                </div>
                <div class="saisitxt">
                    <label for="firstname">Color</label>
                    <input type="text" name="color" id="color" placeholder="Couleur de votre projet" required>
                </div>
                <div class="button">
                    <input type="submit" class="mybutton" name="addproject" value="Ajouter">
                </div>