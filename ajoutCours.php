<HTML>
<?php
require_once("header.php");
require_once("Fonctions/fonction.php");

?>

<link href="css/ajoutCours.css" rel="stylesheet" >
<script type="text/javascript" src="infobulle.js"></script>
<form method="post" action="verif.php" enctype="multipart/form-data">
    <div class="intitule">
        <label >intitule:</label>
        <input type="text" id="intitule" name="intitule">
    </div>
    <div class="niveau">
        <label >niveau:</label>
        <input type="text" id="niveau" name="niveau">
    </div>
    <div class="liste">
        <label >liste des couples :</label>
        <textarea type="text" id="texte" name="texte"></textarea>
        <img src="images/infobull.png" alt="infobulle" onmouseover="javascript: afficher_aide(document.getElementById('aide_salaire'));" onmouseout="javascript: afficher_aide(document.getElementById('aide_salaire'));"/>
        <div class="infobulle">
            <div class="infobulle-texte" id="aide_salaire" style="display: none;">
                séparer chaque couple par un point virgule et chaque chiffre du couple par un "+"
            </div>
        </div>
    </div> 
    <div class="import">
    	<label for="avatar">Importer fichier texte</label>
    <input type="file" name="file" value="file" accept=".txt" />
    </div>
	<div>
		<input class="button" type="submit" value="Envoyer le message" /> 
    </div>

</form>
<a href="index.php"><img class="image" src="images/fleche.jpg" /></a>

</HTML>


