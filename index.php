<?php
include('entete.php')
?>
<?php

<form action 'connexion.php'>
    login :
    <input type="text" name="identifiant">
    password :
    <input type="text" name="mot de passe">
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>
?>
<?php
include('pied_de_page.php')
?>