<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background-image: url('./data_bg.jpg');
    background-attachment: fixed;
    text-align: center;
    font-size: 30px;
}
}
h3,ul,li
{
    text-align: justify;
}
h1,p,a{
    text-decoration: underline;
    color: beige;
}
table{
    color: greenyellow;
    border: green double
}


    </style>
</head>
<body>
    <h1>Affichage Base de Donnée</h1>
<table align="center" border="1" cellpadding="0" cellspacing="0">
<tr>
<th>prenom</th>
    <th>nom</th>
<th>login</th>
<th>passwd</th>
<td>modifie</td>
<td>supprimer</td>

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

    while($row = mysqli_fetch_row($result)){
        $login= $row[0];
        $Nom = $row[1];
        $prenom = $row[2];
        $passwords= $row[3];
        
        echo "<tr>\n
        <td>$prenom</td>\n
        <td>$Nom</td>\n
        <td>$login</td>\n
        <td>$passwords</td>\n
        <td><a href='modifie.php'>modifier</a></td>
        <td><a href='supprime.php'>supprimer</a></td>
        </tr>\n";
        }
?>
</tr>

</table>

</br>
</br> 
</br> 
OrekiCSS&copy;2020&&
DaikiBack&copy;2023
</body>
</html>
