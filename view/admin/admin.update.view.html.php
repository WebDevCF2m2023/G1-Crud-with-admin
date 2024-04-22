<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update d'un article</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Update d'un article</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil de l'administration</li>
            <li><a href="?create">Ajouter un lieu</a></li>
            <li><a href="?disconnect">Déconnexion</a></li>
        </ul>
    </nav>
    <div id="content">
        <h3>Article à modifier</h3>
        <?php
        // datas est une chaîne de caractère : erreur SQL !
        if(is_string($getOneGeoloc)):
        ?>
            <h3 id="alert"><?=$getOneGeoloc?></h3>
        <?php
        // Pas de `geoloc` trouvée
        elseif($getOneGeoloc===false):
        ?>
            <h3 id="comment">Ce lieu n'existe plus !</h3>
        <?php
        // Nous avons un lieu
        else:
        ?>
        <form method="POST" name="geo" action="">
                <input type="hidden" value="<?=$getOneGeoloc['idgeoloc']?>" name="idgeoloc">
                <input type="text" name="title" value="<?=$getOneGeoloc['title']?>" required><br>
                <textarea name="geolocdesc"><?=$getOneGeoloc['geolocdesc']?></textarea><br>
                <input type="number" name="latitude" step="0.000000001" value="<?=$getOneGeoloc['latitude']?>" required>
                <input type="number" name="longitude" step="0.000000001" value="<?=$getOneGeoloc['longitude']?>" required>
                <input type="submit" value="Update">
        </form>
        <?php endif ?>   
    </div>
</body>
</html>