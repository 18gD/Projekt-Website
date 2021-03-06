<?php
    if (isset($_GET["section"])) {
        $section = htmlspecialchars(stripslashes(trim($_GET["section"])));
    }else {
        $section = "main";
    }

    $servername = "localhost";
    $user = "root";
    $password = "";
    $database = "website_18gd";

    $con = new mysqli($servername, $user, $password, $database);

    if ($con->connect_error) {
        die("Could not connect to database");
    }
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>18gD Website</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="http://v4-alpha.getbootstrap.com/examples/jumbotron/jumbotron.css">
        <link rel="stylesheet" href="http://v4-alpha.getbootstrap.com/examples/signin/signin.css">

        <link href="main.css" rel="stylesheet">
    </head>
    <body>
        <?php include("Navbar.php");?>
        <?php include("sites.php");?>

        <hr>

        <?php include("Footer.php");?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
