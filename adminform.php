<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin.css">
    <title>Authentification | Projet php</title>
    
</head>
<body>
    <h1>Administration</h1>
    <fieldset>
        <legend>Authentification</legend>
        <form method="post" action="./admin.php">
            <label for="name">Login</label><br>
            <input id="name" name="login"  type="text"  required 
            value="<?= isset($_GET['login']) ? $_GET['login'] : '' ?>"><br>
            <label for="mdp">Mot de passe</label><br>
            <input id="mdp" type="password" name="motdepasse" required ><br><br>
            <input id="nojoke" type="submit" value="Connect">         
        </form>       
    </fieldset><br>    
    <video autoplay muted loop  src="./adminbg.mp4"></video>
</body>
</html>
