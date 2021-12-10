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


echo ("C'est le dashbord !");

?>