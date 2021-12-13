<?php
session_start();

require_once ("function.php");

if (isset($_POST['connexion'])) 
{	

    //attribution données du formulaire à une variable sécurisée
    $email = htmlspecialchars($_POST['email']);
    $password = sha1($_POST['password']);

    connexion($email, $password);
	

    // if (isValid($email) &&  isValid($password))
    // {
    	
    // 	$connected = false;   	
    //   	$connected = connexion($email, $password);
    //   	if ($connected==false)
    //   	{
    //   		header("Location:./connexion.php");
    //   	}
	// 	else {
	// 		header("Location:./dashboard.php");
	// 	}
      	

	// }

}













?>