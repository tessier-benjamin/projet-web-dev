<?php
require_once("Fonctions/fonction.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
delete($connexion,$_GET['id']);
header('Location: listeCours.php');