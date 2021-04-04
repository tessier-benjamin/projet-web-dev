<?php
require_once("Fonctions/fonction.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
$mdpIDBdd = GetUserMDPID($_POST['name'],$connexion);
echo $_POST['mdp'];
$idcrypt = md5($mdpIDBdd[0]['id']);
$mdpcrypt =  crypt($_POST['mdp'],$idcrypt);
echo $mdpcrypt;


var_dump($mdpIDBdd);
if ($mdpcrypt == $mdpIDBdd[0]['Authentication'] ) {
	echo 'Connexion reussi';
	$perm = GetPerm($_POST['name'],$connexion);
	setcookie('name', $_POST['name']);
	setcookie('idperm', $perm[0]['id']);
	setcookie('perm', $perm[0]['Permission']);
	setcookie('mdp',  $mdpcrypt);
	header('Location: index.php');
}
else {
	header('Location: connexion.php');
}

var_dump($perm);

