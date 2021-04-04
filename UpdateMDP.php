<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
echo $_POST['id'];
$idcrypt = md5($_POST['id']);
$mdpcrypt =  crypt($_POST['mdp'],$idcrypt);
updateMDP($_POST['id'],$mdpcrypt,$connexion);
header('Location: ListeUtilisateur.php');