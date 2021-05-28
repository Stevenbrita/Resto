<?php

if(issert( $_POST ('submit')){

    require_once "Resto.php";


    $name = $_POST ['name' ];
    $address = $_POST ['address'];
    $picture = $_POST ['picture'];
    $type = $_POST ['type'];
    $description = $_POST ['description'];

$resto = new Resto($name, $address, $picture, $type, $description);

$resto->envoisDonnees();


}