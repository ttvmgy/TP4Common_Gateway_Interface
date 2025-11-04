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
                    <input type="text" id="name" name="mot de passe" />
                </li>
                    <div class="button">
                        <button type="submit">Envoyer le message</button>
                    </div>
            </ul>
        </form>

<?php
include('pied_de_page.php')
?>