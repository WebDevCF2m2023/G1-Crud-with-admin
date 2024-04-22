<?php

// création de la fonction qui récupère tous les champs de `geoloc`
function getAllGeoloc(PDO $connection) : array|string
{
    $sql = "SELECT * FROM `geoloc` ;";
    try{
        $query = $connection->query($sql);
        // si il n'y a pas de résultats, fetchAll est un tableau vide
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }catch(Exception $e){
        return $e->getMessage();
    }
}

// on charge tous les champs d'un élément de geoloc grâce à son idgeoloc
// nous renvoie false en cas d'échec ou le message d'erreur sql
// ou un tableau associatif en cas de succès

function getOneGeolocByID(PDO $db, int $getIt) : string|bool|array

{
    $sql = "SELECT * FROM geoloc WHERE idgeoloc = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam("id", $getIt, PDO::PARAM_INT);
    try{
        $stmt->execute();
        if($stmt->rowCount()===0) return false;
        $geoloc = $stmt->fetch();
        $stmt->closeCursor();
        return $geoloc;
    }catch(Exception $e){
        return $e->getMessage();
    }
}

// on update tous les champs d'un élément de geoloc grâce à son idgeoloc
// En lui passant TOUTES les variables en paramètre
// nous renvoie false en cas d'échec ou le message d'erreur sql
// ou un true en cas de succès

function updateOneGeolocByID(PDO $db, int $idgeoloc) : string|bool

{
    return false;
}