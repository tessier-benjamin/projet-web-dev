<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
$permi = GetPermission($connexion);

?>

<form method="post" action="verifCreate.php">
    <div>
        <label >Nom:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label >Mot de passe:</label>
        <input type="password" id="mdp" name="mdp">
    </div>
    <label>Permission:</label>
    <select name = "perm">
        <?php
        for ($i=0;$i < count($permi); $i++){

        ?><option value=<?php echo $permi[$i]["id"];?>><?php echo $permi[$i]["Permission"];?></option><?php
        }
        ?>
    </select></br>
    <input type="submit" value = "Cree"/>
</form>

</br>
<a href="index.php">retour</a>