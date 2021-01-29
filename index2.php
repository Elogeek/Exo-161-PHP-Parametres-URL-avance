<?php
if(isset($_GET['nom'], $_GET['prenom'],$_GET['age']) && ($_GET['nom'] === "Nemare") && ($_GET['prenom'] === "Jean")) {
    if($_GET['age'] === null) {
        echo " Attetion, age n'existe pas !";
    }

}