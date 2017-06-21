<?php
  function Choix($genre, $age){
    if ($genre === 'homme'&& $age < 18){
        return "Tu es un homme et tu es mineur";
    }
    elseif ($genre === 'homme' && $age >= 18){
        return 'Tu es un homme et tu es majeur';
    }
    elseif($genre === 'femme' && $age < 18){
        return 'Tu es une femme et tu es mineur';
    }
    else {
        return 'Tu es une femme et tu es majeur';
    }
  }
  echo Choix('homme', 23);
?>
