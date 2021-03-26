<?php
require_once("Fonctions/fonction.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
$données = GetQuizz($connexion,$_POST['id']);
$Questions = explode(";",$données['0']['couple']);

?>

<table>
    <tr>
        <th>Couple</th>
        <th>Votre Reponse</th>
        <th>Reponse</th>
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
    <\tr>
    <?php
        }
    ?>

</table>

<p id="heading">
    <a href="listeCours.php">retour</a>
</p>


