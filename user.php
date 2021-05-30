<?php

class  User{
    
    private $_firstname;
    private $_lastname;
    private $_useremail;
    private $_userpassword;

    public function __construct ($firstname, $lastname, $useremail, $userpassword) {
       
        $this->SetNom($firstname);
        $this->SetPrenom($lastname);
        $this->SetMail($useremail);
        $this->SetMot_de_passe($userpassword);
    


     

        }

    public function SetId($id) {
        $this->_id=$id; }
    
    public function SetFirstname($firstname) { 
        $this->_firstname=$firstname;  }
    
    public function SetLastname($lastname) { 
        $this->_lastname=$lastname;  }
    
    public function SetUseremail($useremail) { 
        $this->_useremail=$useremail; }
    
    public function SetUserpassword($userpassword) { 
        $this->_userpassword=$userpassword;  }

  
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

$sth= $dsn->prepare("INSERT INTO User (firstname,lastname,useremail,userpassword ") VALUES (:firstname, :lastname, :useremail, :userpassword)");


$sth->bindParam(':firstname', $this->getFirstname());

$sth->bindParam(':lastname', $this->getLastname());

$sth->bindParam(':useremail', $this->getUseremail());

$sth->bindParam(':userpassword', $this->getUserpassword));


$sth->execute();

}

}
