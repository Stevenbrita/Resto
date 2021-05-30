<?php

// Cette page sert de connexion à la base de données qui se trouve sur un serveur local, on y retrouve également les différentes variables qui sont précédées de $ , derrière le = ce sont leurs valeurs.
// La ligne 13 du code est une déclaration de la variable de connexion // 

$host = "localhost";
$port = "3306";
$dbname = "Resto";
$charset = "UTF8";
$user = "root";
$password = "";

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";