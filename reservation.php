<?php

class Reservation{
    private $_id_reservation;
    private $_dated;
    private $_hour;
    private $_id_user;
    private $_id_resto;

    public function __construct ($_id_reservation, $_dated, $_hour, $_id_user, $_id_resto) {
        $this->SetId_reservation($_id_reservation);
        $this->SetDated($dated);
        $this->SetHour($hour);
        $this->SetId_user($id_user);
        $this->SetId_resto($id_resto);
    


     

        }

    public function SetId_reservation($id_reservation) {
        $this->_id_reservation=$id_reservation; }
    
    public function SetDated($dated) { 
        $this->_dated=$dated;  }
    
    public function SetHour($hour) { 
        $this->_hour=$hour;  }
    
    public function SetId_user($id_user) { 
        $this->_id_user=$id_user; }
    
    public function SetId_resto($id_resto) { 
        $this->_id_resto=$id_resto;  }

  
}

    public function GetId_reservation(){
        return $this->_id_reservation;

    public function GetDated(){
        return $this->_dated;

    public function GetHour(){
        return $this->_hour;

    public function GetId_user(){
        return $this->_id_user;
    
    public function GetId_resto()){
        return $this->_id_resto;
        }
    }



        }    
        }
    }


    public function recupDonnees(){

        require_once 'DAO.php'; 

        try { $dbh = new PDO ($dsn,$user,$password);

        } catch(PDOException $e) {
            echo 'Test ';

        }
        
        $sth= $dsn->prepare("INSERT INTO Reservation (id_reservation,dated,hour,id_user,id_resto ") VALUES (:id_reservation, :dated, :hour, :id_user, :id_resto)");

        $sth->bindParam(':id_reservation', $this->getId_reservation());

        $sth->bindParam(':dated', $this->getDated());

        $sth->bindParam(':hour', $this->getHour());

        $sth->bindParam(':id_user', $this->getId_user());

        $sth->bindParam(':id_resto', $this->getId_resto());


        $sth->execute();

    }
}
    