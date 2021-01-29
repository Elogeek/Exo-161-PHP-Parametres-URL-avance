<?php
if(isset($_GET['nom'], $_GET['prenom']) && ($_GET['nom'] === "Nemare") && ($_GET['prenom'] === "Jean")) {
    echo $_GET['nom'] . " " . $_GET['prenom'];
}