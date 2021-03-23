<HTML>

<?php
require_once("Fonctions/fonction.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");



AfficherCours($connexion);
?>
	<form action="<?php ExportAllCouple($connexion)?>" method="post">
		<input type="submit" name="Export" value="Exporter tout les cours"/>
	</form>
	

<p id="heading"><a href="index.php">retour</a></p>

</HTML>