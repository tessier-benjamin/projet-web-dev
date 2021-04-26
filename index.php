<HTML>
<link href="css/pageAcceuil.css" rel="stylesheet" >
<div id="hello">
<?php
require_once("header.php");
echo 'Bonjour ' ; echo $_COOKIE['name'] ;
?>
</div>
<a href="listeCours.php"><button class="button">voir un cours</button></a>
<?php
    if ($_COOKIE['perm'] == 'Admin' or $_COOKIE['perm'] == 'Enseignant' ) {
    ?>

        <a href="ajoutCours.php"><button class="button">Ajouter un cours</button></a>
        <a href="CreeUtilisateur.php"><button class="button">Cree Utilisateur</button></a>
        <a href="ListeUtilisateur.php"><button class="button">Liste Utilisateur</button></a><?php
    }?>
</html>