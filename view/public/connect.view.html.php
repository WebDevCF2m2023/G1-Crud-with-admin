<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Connexion</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil</a></li>
            <li><a href="?json" target="_blank">API</a> format JSON</li>
            <li>Connexion</li>
        </ul>
    </nav>
    <div id="content">
        <h3>Connexion à notre administration</h3>
        <?php if(isset($error)): ?>
            <h4 id="alert"><?=$error?></h4>
        <?php endif ?>    
        <form action="" method="POST" name="connexion">
            <input type="text" name="username" placeholder="Votre login" required><br>
            <input type="password" name="userpwd" placeholder="Votre mot de passe" required><br>
            <input type="submit" value="connexion">
        </form>
        <?php // var_dump($_POST)?>
    </div>
</body>
</html>