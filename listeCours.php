<HTML>
<?php
require_once("header.php");
require_once("Fonctions/fonction.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");

AfficherCours($connexion);
?>
<?php
					if ($_COOKIE['perm'] == 'Admin' or $_COOKIE['perm'] == 'Enseignant') {
					?>	
	<?php } ?>
	

<p id="heading"><a href="index.php">retour</a></p>


</HTML>