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



