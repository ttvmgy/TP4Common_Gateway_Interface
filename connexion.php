<?php
include('entete.php');
?>
    <section>
        <?php
        if (!empty($_REQUEST['identifiant'])) {
            $identifiant = $_REQUEST['identifiant'];
            echo " <h2> Bonjour $identifiant, vous êtes connecté(e) ! </h2> ";
        }
        ?>
     </section>

<?php
include('pied_de_page.php');
?>

