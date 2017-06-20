<?php
  function Compar($num1, $num2){
    if ($num1 === $num2){
      echo 'Les deux nombres sont identiques';
    }
    elseif ($num1 < $num2){
      echo 'Le premier nombre est plus grand';
    }
    else {
      echo 'Le second nombre est plus grand';
    }
  }
  Compar(2, 4);
?>
