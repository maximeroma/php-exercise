<?php
  if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])){
    echo 'Debut: ' . $_GET['dateDebut'] . ', Fin :' . $_GET['dateFin'];
  }
?>
