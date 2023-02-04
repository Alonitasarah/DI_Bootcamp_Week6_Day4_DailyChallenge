<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['check_list'])) {

        // Comptage du nombre de cases à cocher cochées.
        $checked_count = count($_POST['check_list']);
        $name = $_POST['username'];
        echo $name . " Ses couleurs préférées sont. " . $checked_count . " option(s): <br/>";

        // Boucle permettant de stocker et d'afficher les valeurs de chaque case à cocher cochée.
        foreach ($_POST['check_list'] as $selected) {
            echo "<p>" . $selected . "</p>";
        }
    } else {
        echo "<b>Veuillez sélectionner au moins une option.</b>";
    }
}