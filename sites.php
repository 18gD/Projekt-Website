<?php
    if ($section == "bestlist") {
        include("bestenliste.php");
    } elseif ($section == "login") {
        include("login.php");
    } elseif ($section == "wetten") {
          include("wetten.php");
    } elseif ($section == "statistik") {
            include("statistik.php");
    } else {
        include("startseite.php");
    }
?>
