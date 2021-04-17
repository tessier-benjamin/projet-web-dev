<html>
<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
$permi = GetPermission($connexion);

?>
<link href="css/CreeUtilisateur.css" rel="stylesheet">
<form method="post" action="verifCreate.php">
    <div class="nom">
        <label >Nom:</label>
        <input type="text" id="name" name="name">
    </div>
    <div class="motdepasse">
        <label >Mot de passe:</label>
        <input type="password" id="mdp" name="mdp">
    </div>
    <div class="permission">
    <label>Permission:</label>
    <select name = "perm">
        <?php
        for ($i=0;$i < count($permi); $i++){

        ?><option value=<?php echo $permi[$i]["id"];?>><?php echo $permi[$i]["Permission"];?></option><?php
        }
        ?>
    </select></br>
    </div>
    <input class="button" type="submit" value = "Creer"/>
</form>

</br>
<a href="index.php"><img class="image" src="images/fleche.jpg" /></a>
</html>