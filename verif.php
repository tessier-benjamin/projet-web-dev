<?php
require_once("Fonctions/fonction.php");
$connexion = connexionMysqlBdd("localhost","double", "root", "");
AddCouple($_POST['intitule'],$_POST['niveau'],$_POST['texte'],$connexion);?>
<script type="text/javascript">alert("Ajout r�ussie");</script>
<?php
header('Location: ajoutCours.php')

?>