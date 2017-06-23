<?php
  setcookie('mdp', $_POST['mdp']);
  setcookie('login', $_POST['login']);

  echo $_COOKIE['mdp'] . ' ' . $_COOKIE['login'];
?>
