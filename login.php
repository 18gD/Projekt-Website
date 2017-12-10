<?php

    if (isset($_POST["name"])) {
        $name = htmlspecialchars(stripslashes(trim($_POST["name"])));
        $pw = htmlspecialchars(stripslashes(trim($_POST["password"])));
    }

    if(true) {
?>
<div class="container pt-3">
    <form class="form-signin" action="index.php?section=login", method="post">
        <h2 class="form-signin-heading">Logge dich bitte ein</h2>
        <label for="inputName" class="sr-only">Benutzername</label>
        <input name="name" type="text" id="inputName" class="form-control" placeholder="Nutzer" required autofocus>
        <label for="inputPassword" class="sr-only">Passwort</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Passwort" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
</div>

<?php
        if(false) {
?>

<div class="container alert alert-danger" role="alert">Benutzername und Passwort stimmen nicht überein</div>

<?php
        }
    } else {
?>

<div class="container mt-5 alert alert-primary" role="alert">
    Du bist bereits eingeloggt. Klicke hier um auszuloggen: <a href="#" class="alert-link">Logout</a>.
</div>

<?php
    }
?>
