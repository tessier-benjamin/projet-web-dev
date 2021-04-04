<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
$users = GetUsers($connexion);

?>
<table>
	<tr>
	<th>Nom</th>
    <th>Permission</th>
	<th>Supprimer</th>
	<th>Modifier</th>
	</tr><?php
    for ($i=0;$i < count($users); $i++){ ?>
	<tr><td>
	<?php
	echo $users[$i]['Name'];
	?>
	</td>
	<td>
	<?php
	echo $users[$i]['Permission'];
	?>
	</td>
	<td>
	<?php
		if ($_COOKIE['name'] != $users[$i]['Name']) {?>
		<a href="deleteUser.php?id=<?php echo $users[$i][0];?>">Supprimer utilisateur</a><?php
		}
	?>
	</td>
	<td>
	<a href="EditUser.php?id=<?php echo $users[$i][0];?>">Modier utilisateur</a>
	
	</td>
	
	
	
	</tr><?php



	}?>
</table>
</br>
<a href="index.php">Accueil</a>
	