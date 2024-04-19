<?php
/*
Gère le site pour un visiteur non connecté
*/

// si on est sur l'accueil chargement de tous les `geoloc`
$datas = getAllGeoloc($db); // on obtient un string (Erreur SQL), un tableau vide (Pas de datas), un tableau non vide (On a des datas)
// appel de la vue
include "../view/public/homepage.view.html.php";