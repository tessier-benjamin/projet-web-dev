<?php
require_once("Fonctions/fonction.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
$donn�es = GetQuizz($connexion,$_GET['id']);
$Questions = explode(";",$donn�es['0']['couple']);
?>

<form action="reponse.php" method="post">
    <table>
        <tr>
            <th>couple</th>
            <th>Double</th>
            <th>Presque double</th>
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
                <input type="radio" name="<?php echo $i ?>" value="Double" />
            </td>
            <td>
                <input type="radio" name="<?php echo $i ?>" value="Presque Double" />
            </td>
            <input type="hidden" name="id" value="<?php echo $_GET['id']?>" />
            <?php
    }
            ?>
        </tr>
    </table>
    <br />
    <input type="submit" value = "Correction"/>
</form>