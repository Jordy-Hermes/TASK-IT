<<<<<<< HEAD
<?php

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

   $insertuser->execute();

}


}

=======
<?php

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

   $insertuser->execute();

}


}

>>>>>>> fonctionnel
?>