<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil de l'administration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Accueil de l'administration</h1>
    <nav>
        <ul>
            <li>Accueil de l'administration</li>
            <li><a href="?create">Ajouter un lieu</a></li>
            <li><a href="?disconnect">Déconnexion</a></li>
        </ul>
    </nav>
    <div id="content">
        <h3>Liste de nos lieux</h3>
        <?php
        // datas est une chaîne de caractère : erreur SQL !
        if(is_string($datas)):
        ?>
            <h3 id="alert"><?=$datas?></h3>
        <?php
        // Pas encore de `geoloc`
        elseif(empty($datas)):
        ?>
            <h3 id="comment">Pas encore de lieu.</h3>
        <?php
        // Nous avons des lieux
        else:
            // on compte le nombre de données 
            $nb = count($datas);
        ?>
        <h3>Il y a <?=$nb?> <?=$nb>1 ? "lieux" : "lieu"?></h3>
        <table>
            <tr>
                <th>idgeoloc</th>
                <th>title</th>
                <th>geolocdesc</th>
                <th>latitude</th>
                <th>longitude</th>
                <th>update</th>
                <th>delete</th>
            </tr>
            
            <?php
            // tant qu'on a des données
            // var_dump($datas);
            foreach($datas as $data):
            ?>
            <tr>
                <td><?=$data['idgeoloc']?></td>
                <td><?=$data['title']?></td>
                <td><?=$data['geolocdesc']?></td>
                <td><?=$data['latitude']?></td>
                <td><?=$data['longitude']?></td>
                <td><a href="?update=<?=$data['idgeoloc']?>"><img src="img/edit.png" alt="update" /></a></td>
                <td><a href="?delete=<?=$data['idgeoloc']?>"><img src="img/delete-file.png" alt="delete" /></a></td>

            </tr>
        <?php endforeach ?>
        </table>
        <?php endif ?>   
        <?php if(isset($oneLoc))  : 
        var_dump($oneLoc);

            endif ?>
    </div>
</body>
</html>