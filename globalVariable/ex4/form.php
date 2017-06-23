<?php
  setcookie('mdp', $_POST['mdp']);
  setcookie('login', $_POST['login']);

  echo '<form action="index.php" method="post">
          <label for="mdp">Mot de passe</label>
          <input id="mdp" name="mdp" type="text">
          <label for="login">login</label>
          <input id="login" name="login" type="text">
          <button type="submit">Envoyer</button>
        </form>';
?>
