<html>
<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
$données = GetUsersId($_GET['id'],$connexion);
$permi = GetPermission($connexion);
?>
<link href="css/cssAjoutCours.css" rel="stylesheet">
<form method="post" action="UpdateName.php">

<label >Nom :</label>
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
        <input type="text" id="name" name="name" value="<?php echo $données[0]['Name'] ?>">
        <input type="submit" value = "Modifier Nom"/>

</form>
<form method="post" action="UpdateMDP.php">

<label >Mot de passe :</label>
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
        <input type="password" id="mdp" name="mdp" value="">
        <input type="submit" value = "Modifier mot de passe"/>
</form>

<form method="post" action="UpdatePerm.php">
<input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
<label>Permission:</label>
    <select name = "perm">
        <?php
        for ($i=0;$i < count($permi); $i++){

        ?><option value=<?php echo $permi[$i]["id"];?><?php
        if ($données[0]['Permission'] == $permi[$i]['Permission']) {
	    ?> selected="selected" <?php
}?>

        ><?php echo $permi[$i]["Permission"];?></option><?php
        }
        ?>
    </select>
    <input type="submit" value = "Modifier les permission"/>
</form>

</br>
<a href="index.php">retour</a>
</html>