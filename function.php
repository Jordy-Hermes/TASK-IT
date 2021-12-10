<?php

	
function isValid($string){
	return isset($string) && !empty($string);}

function connectDb(){
	$username = "root";
	$password = "";
	$db = new PDO("mysql:host=localhost;dbname=taskit", $username, $password);
	return $db;
}
	
function addUser($nom, $prenom, $entreprise, $email, $password) {

		$db = connectDb();
		
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $reqEmail = $db->prepare("SELECT * FROM user");
            $reqEmail->execute(array($email));
            $mailExist = $reqEmail->rowCount();

            if ($mailExist == 0) {
                $insertuser = $db->prepare("INSERT INTO user (firstname, lastname, entreprise, email, password) VALUES (?, ?, ?, ?, ?)");
                $insertuser->execute(array($nom, $prenom, $entreprise, $email, $password));
            }
            else {
                echo ("Cet e-mail existe déjà.");
            }
        }
    }

function connexion($email, $password)
{
	
	$hpassword = sha1($password);
	$isConnected=false;
	$db = connectDb();
	$result = $db->prepare("SELECT * FROM user WHERE email=?");
	$result->execute(array($email));
	$rows = $result->rowCount();

	if ($rows == 1)
		{
			$row= $result->fetch();
			if($row['password']==$hpassword)
			{
				$isConnected=True;
				echo ("OK");
				return $isConnected;
				
			}
			else
			{
				echo("Mot de passe incorrect");
				return $isConnected;
			}
		}
	else
		{
			echo ("Le mail n'existe pas");
			return $isConnected;
		}

}


?>