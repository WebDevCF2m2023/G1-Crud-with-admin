<?php

/*

Front Controller 

*/

// lancement de la session
session_start();

// appel de dépendances
// configuration
require_once "../config.php";
// Modèles
require_once "../model/administratorModel.php";
require_once "../model/geolocModel.php";

// connexion à la DB 
try{
    // instanciation de notre connexion PDO
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=". DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT , DB_LOGIN, DB_PASSWORD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,]);

}catch(Exception $e){
    die($e->getMessage());
}

// router

if(isset($_SESSION['username'])){
    // appel du contrôleur admin
    require_once "../controller/adminController.php";
    
}else{

// appel du contrôleur public
require_once "../controller/publicController.php";
}

$db = null;