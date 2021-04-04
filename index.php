<HTML>
<?php
require_once("header.php");
echo 'Bonjour ' ; echo $_COOKIE['name'] ;
?>

<p id="heading"><a href="listeCours.php">voir un cours</a></p>
<?php
	if ($_COOKIE['perm'] == 'Admin' or $_COOKIE['perm'] == 'Enseignant' ) {
	?>
		<p id="heading"><a href="ajoutCours.php">Ajouter un cours</a></p>
		<p id="heading"><a href="CreeUtilisateur.php">Cree Utlisateur</a></p>
		<p id="heading"><a href="ListeUtilisateur.php">Liste Utlisateur</a></p><?php
	}


