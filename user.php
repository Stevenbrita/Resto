<?php

// Au sein de cette page j'ai crée une class User, on peut la considérer aussi comme un tableau, dans un premier temps je lui ai donné des attributs par le biais d'une fonction privée. //
// Ensuite on procède à une instanciation grâce à une autre fonction nommée constructeur. Celle ci permet à mon objet User de lui définir de nouveaux arguments, ceux-ci peuvent avoir un type, être requis ou tout simplement avoir une valeur par défaut //


class  User{
    private $_id_user;
    private $_firstname;
    private $_lastname;
    private $_useremail;
    private $_userpassword;

    public function __construct ($id_user, $firstname, $lastname, $useremail, $userpassword) {
        $this->SetId_user($id_user);
        $this->SetFirstname($firstname);
        $this->SetLastname($lastname);
        $this->SetUseremail($useremail);
        $this->SetUserpassword($userpassword);
    


     

        }

    public function SetId_user($id_user) {
        $this->_id_user=$id_user; }
    
    public function SetFirstname($firstname) { 
        $this->_firstname=$firstname;  }
    
    public function SetLastname($lastname) { 
        $this->_lastname=$lastname;  }
    
    public function SetUseremail($useremail) { 
        $this->_useremail=$useremail; }
    
    public function SetUserpassword($userpassword) { 
        $this->_userpassword=$userpassword;  }

  
}

    public function GetId_user(){
        return $this->_id_user;
    }

    public function GetFirstname(){
        return $this->_firstname;

    public function GetLastname(){
        return $this->_lastname;

    public function GetUseremail(){
        return $this->_useremail;
    
    public function GetUserpassword(){
        return $this->_userpassword;
        }
    }

}    
}
}


public function recupDonnees(){

require_once 'DAO.php'; 

try { $dbh = new PDO ($dsn,$user,$password);

} catch(PDOException $e) {
    echo ' Test ';

}

$sth= $dsn->prepare("INSERT INTO User (id_user, firstname,lastname,useremail,userpassword ") VALUES ( :id_user :firstname, :lastname, :useremail, :userpassword)");

$sth->bindParam(':id_user', $this->getId_user());

$sth->bindParam(':firstname', $this->getFirstname());

$sth->bindParam(':lastname', $this->getLastname());

$sth->bindParam(':useremail', $this->getUseremail());

$sth->bindParam(':userpassword', $this->getUserpassword));


$sth->execute();

}

}
