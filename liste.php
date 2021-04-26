<?php
require_once("Fonctions/fonction.php");
require_once("header.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
$données = GetQuizz($connexion,$_GET['id']);
$Questions = explode(";",$données['0']['couple']);
?>
<link href="css/liste.css" rel="stylesheet" >
<form action="reponse.php" method="post">
<div class="form">
    <table>
        <tr>
            <th>couple</th>
            <th>Double</th>
            <th>Presque double</th>
            <th>Resultat de l'adition</th>
        </tr>
        <?php
    for ($i = 0; $i < count($Questions); $i++)
    {

        ?>
        
        <tr>
        <div class="affichage">
            <td>
                <?php echo $Questions[$i] ; ?>
            </td>
            <td>
                <input type="radio" name="<?php echo $i ?>" value="Double" />
            </td>
            <td>
                <input type="radio" name="<?php echo $i ?>" value="Presque Double" />
            </td>
            <td>
                <input type="texte" name="resultat<?php echo $i ?>" value="" />
            </td>
            <input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
            </div>
            <?php
    }
            ?>
        </tr>
    </table>
    </div>
    <br />
    <input class="button" type="submit" value = "Correction"/>
</form>

