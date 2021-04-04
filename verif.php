<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
AddCouple($_POST['intitule'],$_POST['niveau'],$_POST['texte'],$connexion);

header('Location: ajoutCours.php');

