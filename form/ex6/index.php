<?php
  if ($_POST['select'] === null && $_POST['nom'] === null && $_POST['prenom'] === null){
    echo '<form action="index.php" method="post">
            <select name="select">
              <option>Me</option>
              <option>Mr</option>
            </select>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom">
            <button type="submit">Click</button>
          </form>';
  }
  else {
    echo $_POST['select'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'];
  }
?>
