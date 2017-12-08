<?php
    if($section == "main") {
        include("startseite.php");
    } elseif ($section == "bestlist") {
        include("bestenliste.php");
    } elseif ($section == "login") {
        include("login.php");
    } else {
        include("startseite.php");
    }
?>
