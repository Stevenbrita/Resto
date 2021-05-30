<?php



class Resto{
    private $id_resto
    private $_name;
    private $_address;
    private $_picture;
    private $_type;
    private $_description;

    public function __construct ($id_resto, $name, $address, $picture, $type, $description) {
        $this->SetId_resto($id_resto);
        $this->SetName($name);
        $this->SetAddress($address);
        $this->SetPicture($picture);
        $this->SetType($type);
        $this->SetDescription($description);
    


     

        }

    public function SetId_resto($id_resto){
    $this->_id_resto=$id_resto; }
        
    public function SetName($name) {
        $this->_name=$name; }
    
    public function SetAddress($address) { 
        $this->_address=$address;  }
    
    public function SetPicture($picture) { 
        $this->_picture=$picture;  }
    
    public function SetType($type) { 
        $this->_type=$type; }
    
    public function SetDescription($description) { 
        $this->_description=$description;  }

  
}

    public function GetId_resto(){
    return $this->_id_resto;
}

    public function GetName(){
        return $this->_name;

    public function GetAddress(){
        return $this->_address;

    public function GetPicture(){
        return $this->_picture;

    public function GetType(){
        return $this->_type;
    
    public function GetDescription()){
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
            echo 'Test ';

        }
        
        $sth= $dsn->prepare("INSERT INTO Resto (id_resto,name,address,type,picture,description ") VALUES (:id_resto  :name, :address, :type, :picture, :description)");

        $sth->bindParam(':id_resto, $this->getId_user());
        
        $sth->bindParam(':name', $this->getName());

        $sth->bindParam(':address', $this->getAddress());

        $sth->bindParam(':type', $this->getType());

        $sth->bindParam(':picture', $this->getPicture());

        $sth->bindParam(':description', $this->getDescription());


        $sth->execute();

    }
}
    