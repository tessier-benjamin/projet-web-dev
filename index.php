<HTML>
<link href="css/pageAcceuil.css" rel="stylesheet" >
<div id="hello">
<?php
require_once("header.php");
echo 'Bonjour ' ; echo $_COOKIE['name'] ;
?>
</div>
<button class="button"><a href="listeCours.php">voir un cours</a></button>
<?php
    if ($_COOKIE['perm'] == 'Admin' or $_COOKIE['perm'] == 'Enseignant' ) {
    ?>

        <button class="button"><a href="ajoutCours.php">Ajouter un cours</a></button>
        <button class="button"><a href="CreeUtilisateur.php">Cree Utilisateur</a></button>
        <button class="button"><a href="ListeUtilisateur.php">Liste Utilisateur</a></button><?php
    }?>
</html>