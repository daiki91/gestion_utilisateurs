
    <?php
        $login=$_POST['login'];
        $motdepasse=$_POST['motdepasse'];
        if($login=="administrateur" && $motdepasse=="passer"){
           echo "Welcome admin"; 
        }
        else if($login!="administrateur" || $motdepasse!="passer"){    
            echo "Login ou Mot de Passe incorect.";
            echo "<a href=./7form.php?login=$login>RETOUR</a>";   
        }
        if(empty($_POST['login']&&$_POST['motdepasse'])){
            header('Location: 7form.php');
           }
?>
