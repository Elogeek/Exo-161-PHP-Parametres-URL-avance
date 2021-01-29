<?php
if(isset($_GET['batiment'], $_GET['salle']) && ($_GET['batiment'] === "12") && ($_GET('salle') === "101")) {
    echo "le bâtiment : " .$_GET['batiment'] . "<br>" . "la salle : " . $_GET['salle'];
}