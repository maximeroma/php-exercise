<?php
  session_start();
  echo '<ul>
          <li>' . $_SESSION['nom'] . '</li>
          <li>' . $_SESSION['prénom'] . '</li>
          <li>' . $_SESSION['age'] . '</li>
        </ul>';

?>
