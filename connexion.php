<?php
include('entete.php');
?>
    <section>
        <?php
        $identifiant=$_REQUEST['identifiant'];
        $mdp=$_REQUEST['mdp'];
        $_SESSION['indentifiant'] = $identifiant;
        echo " <h2> Bonjour $identifiant, vous êtes connecté(e) ! </h2> ";
        ?>
     </section>

<?php
include('pied_de_page.php');
?>

