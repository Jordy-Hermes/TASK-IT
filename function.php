
<?php
require_once ("lib/ConnectBdd.php");

function isValid($string){
	return isset($string) && !empty($string);}

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