<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
update($_POST['id'],$_POST['intitule'],$_POST['niveau'],$_POST['texte'],$connexion);
header('Location: listeCours.php');