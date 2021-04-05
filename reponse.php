<HTML>
<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
$données = GetQuizz($connexion,$_POST['id']);
$Questions = explode(";",$données['0']['couple']);
?>
<link href="css/cssAjoutCours.css" rel="stylesheet">
<table>
    <tr>
        <th>Couple</th>
        <th>Votre Reponse</th>
        <th>Reponse</th>
        <th>Votre resultat</th>
        <th>Reponse resultat</th>
    </tr>
    
        <?php

    for ($i = 0; $i < count($Questions); $i++)
    {
        ?>
    <tr>
        <td>
            <?php echo $Questions[$i] ; ?>
        </td>
              <td>
                  <?php echo $_POST[$i] ; ?>
              </td>
        
            <?php
            $reponseList = explode("+",$Questions[$i]);
            if ($reponseList[0] == $reponseList[1] ){$reponse = "Double";}else{$reponse = "Presque Double";}

            if ($_POST[$i] == $reponse)
            {
            	 ?><td><?php echo "Correct"?></td><?php
            }
            else
            {
            	?><td><?php echo "Faux"?></td><?php
            } 
            ?>
            <td>
                  <?php echo $_POST["resultat$i"] ; ?>
              </td>
              <td>

                  <?php $resultat = explode("+",$Questions[$i]);
                  echo $resultat[0]+$resultat[1]; ?>
              </td>
    </tr>
    <?php
        }
    ?>

</table>

<p id="heading">
    <a href="listeCours.php">retour</a>
</p>


</html>