<?php

// si on veut se déconnecter
if(isset($_GET['disconnect'])){
    // on se déconnecte
    disconnectAdministrator();
    header("Location: ./");
    exit();
}

// si on a cliqué sur update et que vous n'acceptez que les chiffres 123456789 dans le string $_GET['update']
if(isset($_GET['update'])&&ctype_digit($_GET['update'])){

    // conversion en int
    $idUpdate = (int) $_GET['update'];

    // si on a modifié le formulaire (non obligatoire de vérifier tous les champs, mais dans le isset la virgule équivaut à &&)
    if(isset($_POST['idgeoloc'],
             $_POST['title'],
             $_POST['geolocdesc'],
             $_POST['latitude'],
             $_POST['longitude']
    )){
        // vérification de valeurs (se fera plutôt dans les Modèles dans l'OO)
        $idgeoloc = (int) $_POST['idgeoloc'];
        $title = htmlspecialchars(strip_tags(trim($_POST['title'])),ENT_QUOTES);
        $geolocdesc = htmlspecialchars(trim($_POST['geolocdesc']),ENT_QUOTES);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];

        // fonction qui update la mise à jour
        $update = updateOneGeolocByID($db,$idgeoloc, $title, $geolocdesc, $latitude, $longitude);
        var_dump($update);
    }


    // chargement de l'article pour l'update
    $getOneGeoloc = getOneGeolocByID($db, $idUpdate);
    var_dump($getOneGeoloc);

    // chargement de la vue
    include "../view/admin/admin.update.view.html.php";
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