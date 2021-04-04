<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
updateName($_POST['id'],$_POST['name'],$connexion);
header('Location: ListeUtilisateur.php');