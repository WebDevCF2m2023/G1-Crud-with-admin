<?php

// si on veut se déconnecter
if(isset($_GET['disconnect'])){
    // on se déconnecte
    disconnectAdministrator();
    header("Location: ./");
    exit();
}

// si on est sur l'accueil chargement de tous les `geoloc`
$datas = getAllGeoloc($db); // on obtient un string (Erreur SQL), un tableau vide (Pas de datas), un tableau non vide (On a des datas)
// appel de la vue de l'accueil de l'admin
if (isset($_GET["update"]) || isset($_GET["delete"])) {
    if (isset($_GET["update"]) && ctype_digit($_GET["update"])) {
        $id = $_GET["update"];
    }else if (isset($_GET["update"]) && ctype_digit($_GET["update"])) {
        $id = $_GET["delete"];
    }
$oneLoc = getOneGeolocByID($db, $id);

}

include "../view/admin/admin.homepage.view.html.php";