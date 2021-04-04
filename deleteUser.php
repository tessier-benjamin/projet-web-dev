<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
deleteUser($connexion,$_GET['id']);
header('Location: ListeUtilisateur.php');