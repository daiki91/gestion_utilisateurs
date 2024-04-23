<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./7form.css">
    <title>Formulaire suppression</title>
    
</head>
<body>
    <h1>Formulaire de suppression D'un utilisateur</h1>
    <fieldset>
        <legend>suppression utilisateur</legend>
        <form method="post" action="bddsup.php">
            <label for="name">login</label><br>
            <input id="name" name="logins"  type="text"    value="<?= isset($_GET['logins']) ? $_GET['logins'] : '' ?>"><br>
            <input id="nojoke" type="submit" value="supprimer">         
        </form>       
    </fieldset><br>
    <p><a href=""> &lArr; </a></p>

</body>
</html>