<HTML>
<?php
require_once("header.php");
require_once("Fonctions/fonction.php");

?>

<link href="css/cssAjoutCours.css" rel="stylesheet" >
<script type="text/javascript" src="infobulle.js"></script>
<form method="post" action="verif.php" enctype="multipart/form-data">
    <div>
        <label >intitule:</label>
        <input type="text" id="intitule" name="intitule">
    </div>
    <div>
        <label >niveau:</label>
        <input type="text" id="niveau" name="niveau">
    </div>
    <div>
        <label >liste des couples :</label>
        <textarea type="text" id="texte" name="texte"></textarea>
        <img src="images/infobull.png" alt="infobulle" onmouseover="javascript: afficher_aide(document.getElementById('aide_salaire'));" onmouseout="javascript: afficher_aide(document.getElementById('aide_salaire'));"/>
        <div class="infobulle">
            <div class="infobulle-texte" id="aide_salaire" style="display: none;">
                séparer chaque couple par un point virgule et chaque chiffre du couple par un "+"
            </div>
        </div>
    </div> 

    	<label for="avatar">Importer fichier texte</label>
    <input type="file" name="file" value="file" accept=".txt" />

	<div class="button">
		<input type="submit" value="Envoyer le message" /> 
    </div>

</form>
<p id="heading"><a href="index.php">retour</a></p>

</HTML>


