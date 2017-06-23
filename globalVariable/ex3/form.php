<?php
  setcookie('nom', $_POST['nom']);
  setcookie('prenom', $_POST['prenom']);
  setcookie('age', $_POST['age']);

  echo '<form action="form.php" method="post">
          <label for="nom">Nom</label>
          <input id="nom" name="nom" type="text">
          <label for="prénom">Prénom</label>
          <input id="prénom" name="prénom" type="text">
          <label for="age">Age</label>
          <input id="age" name="age" type="text">
          <button type="submit">Envoyer</button>
        </form>';
?>
