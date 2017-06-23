<?php
  session_start();
  $_SESSION['nom'] = 'ROMA';
  $_SESSION['prénom'] = 'Maxime';
  $_SESSION['age'] = 23;

  echo '<a href="session.php">CONTINUER</a>'; 
?>
