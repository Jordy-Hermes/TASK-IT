
<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=taskit;charset=utf8', 'root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

function isValid($string){
	return isset($string) && !empty($string);}


if (isset($_POST['submit'])) {
    
    //attribution données du formulaire à une variable sécurisée
    $nom = htmlspecialchars($_POST['firstname']);
    $prenom = htmlspecialchars($_POST['lastname']);
    $entreprise = htmlspecialchars($_POST['entreprise']);
    $email = htmlspecialchars($_POST['email']);
    $password = sha1($_POST['password']);

    // Test avec la fonction isValid si les champs du formulaire ne sont pas vide
    if (isValid($_POST['firstname']) &&  isValid($_POST['lastname']) && isValid($_POST['email']) && isValid($_POST['password']) && isValid($_POST['entreprise'])) {
       
		$insertuser = $db->prepare("INSERT INTO user (firstname, lastname, entreprise, email, password) VALUES (?, ?, ?, ?, ?)");
		$insertuser->execute(array($nom, $prenom, $entreprise, $email, $password));

	}
	

}

?>