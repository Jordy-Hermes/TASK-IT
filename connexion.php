<?php
require_once ("function.php");

if (isset($_POST['connexion'])) 
{	echo("ok");

    
    //attribution données du formulaire à une variable sécurisée
    $email = htmlspecialchars($_POST['Email']);
    $password = htmlspecialchars($_POST['Password']);

    // Test avec la fonction isValid si les champs du formulaire ne sont pas vide
    if (isValid($_POST['Email']) &&  isValid($_POST['Password']))
    {
    	
    	$connected = false;   	
      	$connected = connexion($email, $password);
      	if ($connected==false)
      	{
      		header("Location:./test.php");
      	}
      	

	}

}













?>