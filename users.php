<?php

class  Users{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_mail;
    private $_mot_de_passe;

    public function __construct ($id, $nom, $prenom, $mail, $mot_de_passe) {
        $this->SetId($id);
        $this->SetNom($nom);
        $this->SetPrenom($prenom);
        $this->SetMail($mail);
        $this->SetMot_de_passe($mot_de_passe);
    


     

        }

    public function SetId($id) {
        $this->_id=$id; }
    
    public function SetNom($nom) { 
        $this->_nom=$nom;  }
    
    public function SetPrenom($prenom) { 
        $this->_prenom=$prenom;  }
    
    public function SetMail($mail) { 
        $this->_mail=$mail; }
    
    public function SetMot_de_passe($mot_de_passe) { 
        $this->_mot_de_passe=$mot_de_passe;  }

  
}

    public function GetId(){
        return $this->_id;

    public function GetNom(){
        return $this->_nom;

    public function GetPrenom(){
        return $this->_prenom;

    public function GetMail){
        return $this->_mail;
    
    public function GetMot_de_passe){
        return $this->_mot_de_passe;
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

$sth= $dsn->prepare("INSERT INTO Users (id,nom,prenom,mail,mot_de_passe ") VALUES (:id, :nom, :prenom, :mail, :mot_de_passe)");

$sth->bindParam(':id', $this->getId());

$sth->bindParam(':nom', $this->getNom());

$sth->bindParam(':prenom', $this->getPrenom());

$sth->bindParam(':mail', $this->getMail());

$sth->bindParam(':mot_de_passe', $this->getMot_de_passe());


$sth->execute();

}
}
