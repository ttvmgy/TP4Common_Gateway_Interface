<?php
include('entete.php')
?>

        <form action='connexion.php'>
            <ul>
                <li>
                    <label for="name">login</label>
                    <input type="text" id="name" name="identifiant" />
                </li>
                <li>
                    <label for="name">password</label>
                    <input type="password" id="name" name="mot de passe" />
                </li>
                    <div class="button">
                        <input type="submit" value="Envoyer le message">
                    </div>
            </ul>
        </form>

<?php
include('pied_de_page.php')
?>