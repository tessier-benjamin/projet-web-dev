<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");

if (isset($_FILES['file'])) {
	$read = fopen($_FILES['file']['tmp_name'], "r");	
	AddCouple($_POST['intitule'],$_POST['niveau'],fgets($read),$connexion);
}
else {
	AddCouple($_POST['intitule'],$_POST['niveau'],$_POST['texte'],$connexion);
}
header('Location: ajoutCours.php');

