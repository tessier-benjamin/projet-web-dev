<HTML>
<?php
require_once("header.php");
require_once("Fonctions/fonction.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
AfficherCours($connexion);
?>
<link href="css/listeCours.css" rel="stylesheet">
<div class="affichage">
<?php
					if ($_COOKIE['perm'] == 'Admin' or $_COOKIE['perm'] == 'Enseignant') {
					?>	
	<?php } ?>
</div>

<a href="index.php"><img class="image" src="images/fleche.jpg" /></a>


</HTML>