<?php

// tentative de connexion
function connectAdministrator(PDO $con, string $user, string $password) : bool|string
{
    // nous allons récupérez les valeurs utiles pour l'utilisateur via $user uniquement
    $sql="SELECT * FROM `administrator` WHERE username = ?";
    // requête préparée car il y a des (une) entrées utilisateurs
    $prepare = $con->prepare($sql);

    try{
        $prepare->execute([$user]);

        // cet utilisateur n'existe pas, on quitte sans indiquer une erreur qui pourrait être une piste pour un hacker
        if($prepare->rowCount()===0) return false;

        // on met le résultat dans un tableau associatif
        $result = $prepare->fetch();

        // on va vérifiez la validité du mot de passe
        if(password_verify($password,$result['userpwd'])){
            // on met dans la session les variables récupérées par la requête
            $_SESSION = $result;
            // suppression de la variable inutile de la session
            unset($_SESSION['userpwd']);
            // on est connecté
            return true;
        }
        // mot de passe non valide
        return false;

    }catch(Exception $e){
        return $e->getMessage();
    }

    
}