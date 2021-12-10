<?php
require_once ("function.php");

if (isset($_POST['formconnexion'])) 
{
    
    //attribution données du formulaire à une variable sécurisée
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Test avec la fonction isValid si les champs du formulaire ne sont pas vide
    if (isValid($_POST['email']) &&  isValid($_POST['password'])
    {
    	do{
    	$connected==false    	
      	$connected = connection($email, $password);

      	}while($connected==false);
      	
	}

}















?>