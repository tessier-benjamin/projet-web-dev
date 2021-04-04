<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
$LastId = GetLastIdUser($connexion);
$idcrypt = md5($LastId[0]['Max(id)']+1);
$mdpcrypt =  crypt($_POST['mdp'],$idcrypt);

CreateUser($LastId[0]['Max(id)']+1,$_POST['name'],$mdpcrypt,$_POST['perm'],$connexion);

header('Location: index.php');