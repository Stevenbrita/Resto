<?php

// Au sein de cette page j'ai crée une class Resto , on peut la considérer aussi comme un tableau, dans un premier temps je lui ai donné des attributs par le biais d'une fonction privée. //
// Ensuite j'ai procédé à une instanciation grâce à une autre fonction nommée constructeur. Celle ci permet à mon objet User de lui définir de nouveaux arguments, ceux-ci peuvent avoir un type, être requis ou tout simplement avoir une valeur par défaut //



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


        // En dessous j'ai utilisé deux fonctions Le Setter, qui a son importance pour le contrôle de la valeur qu'on veut écrire dans l'attribut. Puis Le Getter il s'agit de lecture publique le plus souvent, l'utiliser est utile que si l'attribut n'est pas accessible au départ et leur intérêt se résume généralement à retourner la valeur de l'attribut.
        


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



// Dans les lignes de codes suivantes, j'ai préparé plusieurs requêtes qui me permettront de recevoir les données que je souhaite dans ma base de données. Par le biais de la function bindParam je vais récupérer l'id_user jusqu'au mot de passe de l'utilisateur.
// La fonction require_once m'est utile dans les cas où le même fichier risque d'être inclus et évalué plusieurs fois durant l'exécution d'un script. Grâce à elle je suis sûr qu'il ne sera inclus qu'une fois et il m'évitera les problèmes de re-déclarations de fonctions ou autres.


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
    