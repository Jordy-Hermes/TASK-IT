<?php


function isValid($string){
	return isset($string) && !empty($string);}
	
function addUser() {

    $nom = htmlspecialchars($_POST['firstname']);
    $prenom = htmlspecialchars($_POST['lastname']);
    $entreprise = htmlspecialchars($_POST['entreprise']);
    $email = htmlspecialchars($_POST['email']);
    $password = sha1($_POST['password']);

    
    if (isValid($_POST['firstname']) &&  isValid($_POST['lastname']) && isValid($_POST['email']) && isValid($_POST['password']) && isValid($_POST['entreprise'])) {

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $reqEmail = $db->prepare("SELECT * FROM user");
            $reqEmail->execute(array($email));
            $mailExist = $reqEmail->rowCount();

            if ($mailExist == 0) {
                $insertuser = $db->prepare("INSERT INTO user (firstname, lastname, entreprise, email, password) VALUES (?, ?, ?, ?, ?)");
                $insertuser->execute(array($nom, $prenom, $entreprise, $email, $password));
            }
            else {
                echo ("Cet e-mail existe déjà.")
            }
        }
    }
function connexion($email, $password)
{
	$hpassword = sha1($password);
	$isConnected=false;

	$result = $db->prepare("SELECT * FROM USER WHERE email=?");
	$result = $db->execute(array($email));
	$rows = mysql_num_rows($result);
	if ($rows == 1)
		{
			$row = mysql_fetch_array($result);
			if($row['password']==$hpassword)
			{
				$isConnected=True;
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