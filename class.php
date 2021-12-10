<?php  
require('function.php');

class Colonne {

    public function __construct($name, $numberMax) {
        $this->name = $first_name;
        $this->numberMax = $numberMax;
    }

    public function createColumn() {
            
    }
}
 class ManagerPDO{

 	protected $db;

 	public function __construct(PDO $db){
 		$this->db=$db
 	}
 	public function addUser($user){
 		$insertuser = $this->db->prepare("INSERT INTO user (firstname, lastname, entreprise, email, password) VALUES (:firstname, :lastname, :entreprise, :email, :password)");
 		$insertuser->bindValue(":firstname", $user->firstname);
 		$insertuser->bindValue(":lastname", $user->lastname);
		$insertuser->bindValue(":entreprise", $user->entreprise);
		$insertuser->bindValue(":email", $user->email);
		$insertuser->bindValue(":password", $user->password);

		$insertuser->execute

 	}




 }
?>