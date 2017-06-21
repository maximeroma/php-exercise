<?php
  function Concat($nom, $prenom, $age){
    return "Bonjour " . $nom . ' ' . $prenom . ',tu as ' . $age . ' ans.';
  }
  echo Concat(roma,maxime,23);
?>
