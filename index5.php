<?php
if(isset($_GET['semaine']) && ($_GET['semaine'] === "12")) {
    echo"aujourd'hui, on est la " . $_GET['semaine'];
}