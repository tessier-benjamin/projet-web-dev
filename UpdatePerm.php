<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");

var_dump($_POST);

updatePerm($_POST['id'],$_POST['perm'],$connexion);
header('Location: ListeUtilisateur.php');