<?php
require_once("Fonctions/fonction.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
$données = GetCours($connexion,$_GET['id']);
?>

<link href="cssAjoutCours.css" rel="stylesheet">
<script type="text/javascript" src="infobulle.js"></script>
<form method="post" action="update.php">
    <div>
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
        <label >intitule:</label>
        <input type="text" id="intitule" name="intitule" value="<?php echo $données[0]['intitule'] ?>">
    </div>
    <div>
        <label >niveau:</label>
        <input type="text" id="niveau" name="niveau" value="<?php echo $données[0]['niveau'] ?>">
    </div>
    <div>
        <label >liste des couples :</label>
        <textarea type="text" id="texte" name="texte"><?php echo $données[0]['couple'] ?></textarea>
        <img src="images/infobull.png" alt="infobulle" onmouseover="javascript: afficher_aide(document.getElementById('aide_salaire'));" onmouseout="javascript: afficher_aide(document.getElementById('aide_salaire'));"/>
        <div class="infobulle">
            <div class="infobulle-texte" id="aide_salaire" style="display: none;">
                séparer chaque couple par un point virgule et chaque chiffre du couple par un "+"
            </div>
        </div>
    </div> 
	<div class="button">
		<input type="submit" value="Envoyer le message" /> 
    </div>
</form>
