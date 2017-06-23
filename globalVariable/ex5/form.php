<?php
  setcookie('mdp', $_POST['mdp']);
  setcookie('login', $_POST['login']);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookie</title>
  </head>
  <body>
    <form action="form.php" method="post">
        <label for="mdp">Mot de passe</label>
        <input id="mdp" name="mdp" type="text">
        <label for="login">login</label>
        <input id="login" name="login" type="text">
        <button type="submit">Envoyer</button>
    </form>
    <?php
      echo '<h1>' . $_COOKIE['mdp'] . '</h1>';
      echo '<h1>' . $_COOKIE['login'] . '</h1>';
    ?>
  </body>
</html>
