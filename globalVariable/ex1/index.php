<?php
  echo '<ul>
          <li>User Agent : ' . $_SERVER['HTTP_USER_AGENT'] .  '</li>
          <li>Adresse IP : ' . $_SERVER['REMOTE_ADDR'] . '</li>
          <li>Nom du serveur : ' . $_SERVER['SERVER_NAME'] . '</li>
        </ul>';
?>
