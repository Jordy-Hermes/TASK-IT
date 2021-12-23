<?php

function isValid($string){
	return isset($string) && !empty($string);}

function connectDb(){
	$username = "root";
	$password = "root";
	$db = new PDO("mysql:host=localhost;dbname=taskit", $username, $password);
	return $db;
}
	
function addUser($nom, $prenom, $entreprise, $email, $password) {

		$db = connectDb();

        $insertuser = $db->prepare("INSERT INTO user (firstname, lastname, entreprise, email, password) VALUES (?, ?, ?, ?, ?)");
        $insertuser->execute(array($nom, $prenom, $entreprise, $email, $password));
		header("Location:formConnexion.php");
}

function connexion($email, $password)
{
	$erreurConnexion = "";
	$db = connectDb();
	$result = $db->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
	$result->execute(array($email, $password));
    $userexist = $result->rowCount(); //compte le nombre de rangés existantes avec les informations du formulaire dans la bdd
    
	if ($userexist == 1)
        {
            $userinfo = $result->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['email'] = $userinfo['email'];
            $_SESSION['password'] = $userinfo['password'];
            header("Location: ./dashboard.php?id=".$_SESSION['id']);
        }
        else
        {
            $erreurConnexion = "Il n'y a pas de membres avec ces identifiants";
        }	
	// $hpassword = sha1($password);
	// $email = "";
	// $isConnected=false;
	// $db = connectDb();
	// $result = $db->prepare("SELECT * FROM user WHERE email=?");
	// $result->execute(array($email));
	// $rows = $result->rowCount();

	// if ($rows == 1)
	// 	{
	// 		$row= $result->fetch();
	// 		if($row['password']==$hpassword)
	// 		{
	// 			$isConnected=True;
	// 			echo ("OK");
	// 			return $isConnected;
				
	// 		}
	// 		else
	// 		{
	// 			echo("Mot de passe incorrect");
	// 			return $isConnected;
	// 		}
	// 	}
	// else
	// 	{
	// 		echo ("Le mail n'existe pas");
	// 		return $isConnected;
	// 	}

}

?>