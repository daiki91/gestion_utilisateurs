<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./7form.css">
    <title>Formulaire V$ | TP php</title>
    
</head>
<body>
<h1>LISTE DES utilisateur</h1>
    <fieldset>
        <legend>LISTER LES utilisateurs</legend>
        <form method="post" action="liste.php">
            <label for="name">LISTER</label><br>
            <input id="nojoke" type="submit" value="lister">         
        </form>       
    </fieldset><br>
    <h1>Formulaire d'Ajout D'utilisateur</h1>
    <fieldset>
        <legend>Ajout D'utilisateur</legend>
        <form method="post" action="bdd.php">
            <label for="name">nom</label><br>
            <input id="name" name="nom"  type="text"  required value="<?= isset($_GET['nom']) ? $_GET['nom'] : '' ?>"><br>
            <label for="name">prenom</label><br>
            <input id="name" name="prenom"  type="text" required
            value="<?= isset($_GET['prenom']) ? $_GET['prenom'] : '' ?>"><br>
            <label for="name">login</label><br>
            <input id="name" name="login"  type="text"   required value="<?= isset($_GET['login']) ? $_GET['login'] : '' ?>"><br>
            <label for="mdp">Mot de passe</label><br>
            <input id="mdp" type="password" required name="password" value="<?= isset($_GET['password']) ? $_GET['password'] : '' ?>" ><br><br>
            <input id="nojoke" type="submit" value="Ajouter">         
        </form>       
    </fieldset><br>
    <h1>Formulaire de suppression D'un utilisateur</h1>
    <fieldset>
        <legend>suppression utilisateur</legend>
        <form method="post" action="bddsup.php">
            <label for="name">login</label><br>
            <input id="name" name="logins"  type="text"    value="<?= isset($_GET['logins']) ? $_GET['logins'] : '' ?>"><br>
            <input id="nojoke" type="submit" value="supprimer">         
        </form>       
    </fieldset><br>
    <h1>Formulaire de Modification D'utilisateur</h1>
    <fieldset>
        <legend>Modification D'un utilisateur</legend>
        <form method="post" action="bddmod.php">
            <label for="name">nom</label><br>
            <input id="name" name="nom"  type="text"  required value="<?= isset($_GET['nom']) ? $_GET['nom'] : '' ?>"><br>
            <label for="name">prenom</label><br>
            <input id="name" name="prenom"  type="text" required
            value="<?= isset($_GET['prenom']) ? $_GET['prenom'] : '' ?>"><br>
            <label for="name">login</label><br>
            <input id="name" name="login"  type="text"   required value="<?= isset($_GET['login']) ? $_GET['login'] : '' ?>"><br>
            <label for="mdp">Mot de passe</label><br>
            <input id="mdp" type="password" required name="password" value="<?= isset($_GET['password']) ? $_GET['password'] : '' ?>" ><br><br>
            <input id="nojoke" type="submit" value="modifier">         
        </form>       
    </fieldset><br>

</body>
</html>