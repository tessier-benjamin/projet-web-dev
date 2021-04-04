<?php

function connexionMysqlBdd($hote,$bd, $util, $mpas){
		
		$PARAM_hote=$hote; // le chemin vers le serveur
		$PARAM_nom_bd=$bd; // le nom de votre base de données
		$PARAM_utilisateur=$util; // nom d'utilisateur pour se connecter
		$PARAM_mot_passe=$mpas; // mot de passe de l'utilisateur pour se connecter
		try{ 
			$connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
		}  
		catch(Exception $e){
			echo 'Erreur : '.$e->getMessage(); 
			}
			return $connexion;
	}

function AfficherCours($connexion){
	$requete = $connexion->prepare('SELECT * FROM cours');
	$requete->execute(array()) ;
 ?>
        <table>
                <tr>
                    <th>id</th>
                    <th>intitule</th>
					<th>niveau</th>
					<?php
					if ($_COOKIE['perm'] == 'Admin' or $_COOKIE['perm'] == 'Enseignant') {
					?>	
					<th>couple</th>
					<?php } ?>
                    <th>Lien du cour</th>
					<?php
					if ($_COOKIE['perm'] == 'Admin' or $_COOKIE['perm'] == 'Enseignant') {
					?>
					<th>Supprimer</th>
					<th>Modifier</th>
                    <?php } ?>
                </tr>
				<?php
		while($donnees = $requete->fetch()){
?>
			<tr><td>
<?php			
			echo $donnees['id'];
?>
			</td>
			<td>
<?php			
			echo $donnees['intitule'];
?>		
			</td>
			<td>
			<?php			
			echo $donnees['niveau'];
?>
			</td>
			<?php
					if ($_COOKIE['perm'] == 'Admin' or $_COOKIE['perm'] == 'Enseignant') {
					?>	
			<td>
			
			<?php			
			echo $donnees['couple'];
            ?>
			</td><?php } ?>
                <td>
                    <a href="liste.php?id=<?php echo $donnees['id'];?>">Lien du cours</a>
                </td>
				
				<?php
					if ($_COOKIE['perm'] == 'Admin' or $_COOKIE['perm'] == 'Enseignant') {
					?>	
				<td>
                    <a href="delete.php?id=<?php echo $donnees['id'];?>">Supprimer cours</a>
                </td>
				<td>
                    <a href="modification.php?id=<?php echo $donnees['id'];?>">Modifier cours</a>
                </td> <?php } ?>
				
	</tr><?php

		}?></table><?php

		$requete->closeCursor();
	}

function AddCouple($intitule,$niveau,$couple,$connexion){
	$requete = $connexion->prepare("Insert into cours (intitule,niveau,couple) Values ('$intitule','$niveau','$couple') ");
	$requete->execute(array()) ;
}
function GetQuizz($connexion,$id){
    $requete = $connexion->prepare("Select * from cours where id = '$id'");
	$requete->execute(array()) ;
	$resultat = $requete->fetchAll();
	return $resultat;

}

function ExportAllCouple($connexion){
    
}
function delete($connexion,$id){
	$requete = $connexion->prepare("delete from cours where id = '$id'");
	$requete->execute(array()) ;
}
function GetAllCours($connexion){
	$requete = $connexion->prepare("Select * from cours'");
	$requete->execute(array()) ;
		$resultat = $requete->fetchAll();
	return $resultat;
}
function GetCours($connexion,$id){
	$requete = $connexion->prepare("Select * from cours where id = '$id'");
	$requete->execute(array()) ;
	$resultat = $requete->fetchAll();
	return $resultat;
}

function update($id,$intitule,$niveau,$couple,$connexion){
	$requete = $connexion->prepare("update cours set intitule = '$intitule' ,niveau='$niveau',couple='$couple' where id = '$id' ");
	$requete->execute(array()) ;
}
function GetPermission($connexion){
	$requete = $connexion->prepare("Select * from permission;");
	$requete->execute(array()) ;
	$resultat = $requete->fetchAll();
	return $resultat;
}
function GetLastIdUser($connexion){
	$requete = $connexion->prepare("Select Max(id) from users;");
	$requete->execute(array()) ;
	$resultat = $requete->fetchAll();
	return $resultat;

}
function CreateUser($id,$name,$auth,$idPerm,$connexion){
	$requete = $connexion->prepare("Insert into users (id,Name,Authentication,idPermission) Values ('$id','$name','$auth','$idPerm') ");
	$requete->execute(array()) ;
}
function GetUserMDPID($name,$connexion){
	$requete = $connexion->prepare("Select id,Name,Authentication from users where Name = '$name';");
	$requete->execute(array()) ;
	$resultat = $requete->fetchAll();
	return $resultat;
}
function GetPerm($name,$connexion){
	$requete = $connexion->prepare("select permission.id,Permission from users inner join permission on users.idPermission = permission.id where Name = '$name';");
	$requete->execute(array()) ;
	$resultat = $requete->fetchAll();
	return $resultat;
}
function GetUsers($connexion){
	$requete = $connexion->prepare("select * from users inner join permission on users.idPermission = permission.id;");
	$requete->execute(array()) ;
	$resultat = $requete->fetchAll();
	return $resultat;
}
function deleteUser($connexion,$id){
	$requete = $connexion->prepare("delete from users where id = '$id'");
	$requete->execute(array()) ;
}
function GetUsersId($id,$connexion){
	$requete = $connexion->prepare("select * from users inner join permission on users.idPermission = permission.id where users.id = '$id';");
	$requete->execute(array()) ;
	$resultat = $requete->fetchAll();
	return $resultat;
}

function updateName($id,$name,$connexion){
	$requete = $connexion->prepare("update users set Name = '$name' where id = '$id' ");
	$requete->execute(array()) ;
}
function updateMDP($id,$mdp,$connexion){
	$requete = $connexion->prepare("update users set Authentication = '$mdp' where id = '$id' ");
	$requete->execute(array()) ;
}
function updatePerm($id,$perm,$connexion){
	$requete = $connexion->prepare("update users set idPermission = '$perm' where id = '$id' ");
	$requete->execute(array()) ;
}