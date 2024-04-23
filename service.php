<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./service.css">
    <script src="./service.js"></script>
    <title>Gestion | Projet php</title>
    <style>
        table,td,tr,th{
        border: 2px dodgerblue double;;
        font-size: larger;
        font-weight: bolder;
        }
        th{
        color: seagreen ;
        }
        td{
        color: khaki;
        text-shadow:#000000 1px 1px, #000000 -1px 1px, #000000 -1px -1px, #000000 1px -1px;
        }
    </style>
</head>
<body>
<h1>Liste des utilisateurs</h1>
<table align="center" cellspacing="0">
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Login</th>
        <th>Mot de Passe</th>
        <th>Modification</th>
        <th>Suppression</th>
    </tr>
<?php
    // Déclaration des paramètres de connexion
    $host = "localhost";
    // Généralement la machine est localhost
    // c'est-a-dire la machine sur laquelle le script est hébergé
    $user = "root";
    $bdd ="utilisateurs";
    $passwd = "";
    // Connexion au serveur
    $connect = mysqli_connect($host, $user,$passwd,$bdd) or die("erreur de connexion au serveur");
    mysqli_select_db($connect, $bdd) or die("erreur de connexion a la base de donnees");
    // Creation et envoi de la requete
    $query = "SELECT * from utilisateur";
    $result = mysqli_query($connect,$query);
    // Recuperation des resultats
        while($row = mysqli_fetch_row($result)){
            $nom= $row[0];
            $pnom = $row[1];
            $login = $row[2];
            $password= $row[3];
            echo "
            <tr>
            <td>$nom</td>
            <td>$pnom</td>
            <td>$login</td>
            <td>$password</td>
            <td><b onclick='modsc();' class='$login'>Modifier</b></td>
            <td><b onclick='delsc();' class='$login'>Supprimer</b></td>
            </tr>";
        }
//Deconnexion de la base de donnees
mysqli_close($connect);      
?>
</table>
OrekiCSS&copy;2020&&
DaikiBack&copy;2023
<div id="menu">
    <p onclick="list();"><img src="./lister.jpg"> Lister</p>
    <p onclick="add();"><img src="./ajout.jpg"> Ajouter</p>
    <p onclick="mod();"><img src="./modifie.jpg"> Modifier</p>
    <p onclick="del();"><img src="./delete.jpg"> Supprimer</p>
</div>
<div   class="actions"  id="add">
    <fieldset   >
        <legend>Ajout Utilisateur</legend>
        <form method="post" action="bddAdd.php">
            <label for="name">nom</label><br>
            <input id="name" name="nom"  type="text"  required value="<?= isset($_GET['nom']) ? $_GET['nom'] : '' ?>"><br>
            <label for="name">prenom</label><br>
            <input id="name" name="prenom"  type="text" required
            value="<?= isset($_GET['prenom']) ? $_GET['prenom'] : '' ?>"><br>
            <label for="name">login</label><br>
            <input id="name" name="login"  type="text"   required value="<?= isset($_GET['login']) ? $_GET['login'] : '' ?>"><br>
            <label for="mdp">Mot de passe</label><br>
            <input id="mdp" type="password" required name="password" value="<?= isset($_GET['password']) ? $_GET['password'] : '' ?>" ><br><br>
            <input class="nojoke" type="submit" value="Ajouter">         
        </form>       
    </fieldset><br>
</div> 
<div   class="actions"  id="del">
    <fieldset  >
        <legend>Suppression Utilisateur</legend>
        <form method="post" action="bddDel.php">
            <label for="name">login</label><br>
            <input id="namedel" name="logins"  type="text"    value="<?= isset($_GET['logins']) ? $_GET['logins'] : '' ?>"><br>
            <input class="nojoke" type="submit" value="supprimer">         
        </form>       
    </fieldset><br>
</div>
<div  class="actions" id="mod">
    <fieldset  >
        <legend>Modification Utilisateur</legend>
        <form method="post" action="bddMod.php">
        <label for="name">login</label><br>
            <input id="namemod" name="login"  type="text"   required value="<?= isset($_GET['login']) ? $_GET['login'] : '' ?>"><br>
            <label for="name">Nouveau Nom</label><br>
            <input id="name" name="nom"  type="text"  required value="<?= isset($_GET['nom']) ? $_GET['nom'] : '' ?>"><br>
            <label for="name">Nouveau Prenom</label><br>
            <input id="name" name="prenom"  type="text" required
            value="<?= isset($_GET['prenom']) ? $_GET['prenom'] : '' ?>"><br>
            <label for="mdp">Nouveau Mot de Passe</label><br>
            <input id="mdp" type="password" required name="password" value="<?= isset($_GET['password']) ? $_GET['password'] : '' ?>" ><br><br>
            <input class="nojoke" type="submit" value="modifier">         
        </form>       
    </fieldset><br>
</div>
    <video src="./bddbg.mp4" autoplay muted loop ></video>
</body>
</html>