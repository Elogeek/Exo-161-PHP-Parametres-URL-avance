<?php
if(isset($_GET['langage'], $_GET['serveur']) && ($_GET['langage'] === "PHP") && ($_GET['serveur'] === "LAMP")) {
    echo "Langage: " . $_GET['langage'] . "<br>" . "Serveur: " . $_GET['serveur'];
}