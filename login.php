<?php
    if(false) {
?>
<div class="container">
    <form class="form-signin" action="index.php?section=main", method="post">
        <h2 class="form-signin-heading">Logge dich bitte ein</h2>
        <label for="inputName" class="sr-only">Benutzername</label>
        <input name="name" type="text" id="inputName" class="form-control" placeholder="Nutzer" required autofocus>
        <label for="inputPassword" class="sr-only">Passwort</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Passwort" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
</div>

<?php
        if(true) {
?>

<div class="container alert alert-danger" role="alert">Benutzername und Passwort stimmen nicht überein</div>

<?php
        }
    } else {
?>

<div class="container alert alert-primary" role="alert">
    Du bist bereits eingeloggt. Klicke hier um auszuloggen: <a href="#" class="alert-link">Logout</a>.
</div>

<?php
    }
?>
