<?php

require_once "Resto.php";

if (isset($_POST['submit'])){
if (!empty($_POST['name']) && !empty($_POST['address'])  && !empty($_POST['type'])){


    $name = $_POST ['name' ];
    $address = $_POST ['address'];
    $picture = $_POST ['picture'];
    $type = $_POST ['type'];
    $description = $_POST ['description'];

$resto = new Resto($name, $address, $picture, $type, $description);

$resto->envoisDonnees();
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
