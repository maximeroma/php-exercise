<?php
  if ($_GET['select'] === null || $_GET['nom'] === null || $_GET['prenom'] === null || pathinfo($_GET['file'])['extension'] != 'pdf'){
    echo '<form action="index.php" method="get">
            <select name="select">
              <option>Me</option>
              <option>Mr</option>
            </select>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom">
            <label for="file">File</label>
            <input type="file" name="file" id="file">
            <button type="submit">Click</button>
          </form>';
  }
  else {
    $path_parts = pathinfo($_GET['file']);
    $path_basename = $path_parts['basename'];
    $path_extension = $path_parts['extension'];
    echo $_GET['select'] . ' ' . $_GET['nom'] . ' ' . $_GET['prenom'] . ' ' . $path_basename . ' ' . $path_extension;
  }
?>
