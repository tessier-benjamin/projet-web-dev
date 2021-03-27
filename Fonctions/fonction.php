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
					<th>couple</th>
                    <th>Lien du cour</th>
					<th>Supprimer</th>
					<th>Modifier</th>
                    
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
			<td>
			<?php			
			echo $donnees['couple'];
            ?>
			</td>
                <td>
                    <a href="liste.php?id=<?php echo $donnees['id'];?>">Lien du cours</a>
                </td>
				<td>
                    <a href="delete.php?id=<?php echo $donnees['id'];?>">Supprimer cours</a>
                </td>
				<td>
                    <a href="modification.php?id=<?php echo $donnees['id'];?>">Modifier cours</a>
                </td>
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
