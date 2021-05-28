<?php



class Resto{
    private $_name;
    private $_address;
    private $_picture;
    private $_type;
    private $_description;

    public function __construct ($name, $address, $picture, $type, $description) {
        $this->SetName($name);
        $this->SetAddress($address);
        $this->SetPicture($picture);
        $this->SetType($type);
        $this->SetDescription($description);
    


     

        }

    public function SetName($name) {
        $this->_name=$name; }
    
    public function SetAddress($address) { 
        $this->_address=$address;  }
    
    public function SetPicture($picture { 
        $this->_picture=$picture;  }
    
    public function SetType($type) { 
        $this->_type=$type; }
    
    public function SetDescription($description) { 
        $this->_description=$description;  }

  
}

    public function GetName(){
        return $this->_name;

    public function GetAddress(){
        return $this->_address;

    public function GetPicture(){
        return $this->_picture;

    public function GetType(){
        return $this->_type;
    
    public function GetDescription){
        return $this->_description;
        }
    }



        }    
        }
    }


    public function recupDonnees(){

        require_once 'DAO.php'; 

        try { $dbh = new PDO ($dsn,$user,$password);

        } catch(PDOException $e) {
            echo 'cheh ';

        }
        
        $sth= $dsn->prepare("INSERT INTO Resto (name,address,type,picture,description ") VALUES (:name, :address, :type, :picture, :description)");

        $sth->bindParam(':name', $this->getName());

        $sth->bindParam(':address', $this->getAddress());

        $sth->bindParam(':type', $this->getType());

        $sth->bindParam(':picture', $this->getPicture());

        $sth->bindParam(':description', $this->getDescription());


        $sth->execute();

    }
}
    