<?php
if(isset($_GET['dateDebut'], $_GET['dateFin']) && ($_GET['dateDebut'] === "2/05/2016") && ($_GET['dateFin'] === "27/11/2016")) {
    echo "Date de début: " . $_GET['dateDebut'] . "<br>" . "Date de fin: " . $_GET['dateFin'];
}