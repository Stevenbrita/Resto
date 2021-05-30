<?php

// Au sein de cette page j'ai crée une class Reservation, on peut la considérer aussi comme un tableau, dans un premier temps je lui ai donné des attributs par le biais d'une fonction privée. //
// Ensuite j'ai procédé à une instanciation grâce à une autre fonction nommée constructeur. Celle ci permet à mon objet User de lui définir de nouveaux arguments, ceux-ci peuvent avoir un type, être requis ou tout simplement avoir une valeur par défaut //


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
    

// En dessous j'ai utilisé deux fonctions Le Setter, qui a son importance pour le contrôle de la valeur qu'on veut écrire dans l'attribut. Puis Le Getter il s'agit de lecture publique le plus souvent, l'utiliser est utile que si l'attribut n'est pas accessible au départ et leur intérêt se résume généralement à retourner la valeur de l'attribut.
        
     

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


    // Dans les lignes de codes suivantes, j'ai préparé plusieurs requêtes qui me permettront de recevoir les données que je souhaite dans ma base de données. Par le biais de la function bindParam je vais récupérer l'id_user jusqu'au mot de passe de l'utilisateur.
// La fonction require_once m'est utile dans les cas où le même fichier risque d'être inclus et évalué plusieurs fois durant l'exécution d'un script. Grâce à elle je suis sûr qu'il ne sera inclus qu'une fois et il m'évitera les problèmes de re-déclarations de fonctions ou autres.


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
    