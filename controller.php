<?php

// Dans cette page j'ai utilisé la fonction require_once plusieurs fois afin d'inclure les  mêmes fichiers et de les évaluer plusieurs fois durant l'exécution d'un script. Grâce à elle je suis sûr qu'il seront inclus qu'une fois et qu'ils m'éviteront les problèmes de re-déclarations de fonctions ou autres.
// J'ai également eu recours à la méthode POST qui me permet d'emmagasiner toutes les valeurs "postées" dans un tableau associé, en notant les noms des données du formulaire, car ils représentent les clés dans le tableau associé à cette méthode.
// Enfin j'ai crée une variable RestoAsiatique qui possède les mêmes attributs que la class Resto ainsi que la variable steven qui elle a les mêmes attributs que la class User. 
// La commande echo m'aide à voir si les informations ont été mises à jour, comme par exemple ce restaurant a bien été ajouté. 
require_once "Resto.php";

if (isset($_POST['submit'])){
if (!empty($_POST['name']) && !empty($_POST['address'])  && !empty($_POST['type'])){


    $name = $_POST ['name' ];
    $address = $_POST ['address'];
    $picture = $_POST ['picture'];
    $type = $_POST ['type'];
    $description = $_POST ['description'];

$restoAsiatique = new Resto($name, $address, $picture, $type, $description);

$restoAsiatique->envoisDonnees();
echo "Ce restaurant" . " " . " est bien ajouté";

}       

}


require_once "User.php";

if (isset($_POST['usersubmit'])){
if (!empty($_POST['firstname']) && !empty($_POST['lastname'])  && !empty($_POST['useremail'] && !empty($_POST['userpassword'])){


    $firstName = $_POST ['firstname' ];
    $lastName = $_POST ['lastname'];
    $userEmail = $_POST ['useremail'];
    $userPassword = $_POST ['userpassword'];
    

$steven = new User ($firstName, $lastName, $userEmail, $userPassword);

$steven->inscriptionUser();
echo " Nouveau client :" . " " . $firstName . " " . $lastName; 
