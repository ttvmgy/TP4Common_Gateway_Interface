<?php
include('entete.php')
?>
<h2>Acceuil</h2>
<a href="formulaire.php" id="connexion">Connexion</a>
<?php
        if (!empty($_SESSION['identifiant'])) {
            echo  "Bonjour", $_SESSION['identifiant'];
        }
        else{
            echo '<a href="formulaire.php" id="connexion">Connexion</a>';
        }
        ?>
<p id="commentaire_page_acceuil">Veuiller vous connecter</p>
<?php
include('pied_de_page.php')
?>