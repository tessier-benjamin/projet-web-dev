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

