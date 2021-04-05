<HTML>
<?php
require_once("header.php");
require_once("Fonctions/fonction.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
AfficherCours($connexion);
?>
<link href="css/cssAjoutCours.css" rel="stylesheet">
<?php
					if ($_COOKIE['perm'] == 'Admin' or $_COOKIE['perm'] == 'Enseignant') {
					?>	
	<form action="<?php ExportAllCouple($connexion)?>" method="post">
		<input type="submit" name="Export" value="Exporter tout les cours"/>
	</form>
	<?php } ?>
	

<p id="heading"><a href="index.php">retour</a></p>


</HTML>