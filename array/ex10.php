<?php
  $département = array(
    '62' => 'Pas de Calais',
    '59' => 'Nord',
    '80' => 'Somme',
    '02' => 'Aisne',
    '60' => 'Oise',
  );

  foreach ($département as $key => $value) {
    echo "Le département ". $value . " a le numéro " . $key . '<br/>';
  }
?>
